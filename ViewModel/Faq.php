<?php declare(strict_types=1);

namespace Develodesign\CategoryFaqExtension\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Faq implements ArgumentInterface
{
    public function __construct(
        private \Lof\Faq\Block\Widget\Faq $faqWidget,
        private \Magento\Framework\Registry $registry,
        private \Lof\Faq\Model\Question $questionFactory,
        private \Magento\Framework\App\ResourceConnection $resource,
    ) {}

    /**
     * Load a collection of FAQ questions associated with the current category
     * @return \Lof\Faq\Model\ResourceModel\Question\Collection | []
     */
    public function getFaqCollection() : \Lof\Faq\Model\ResourceModel\Question\Collection | array {

        $currentCategory = $this->registry->registry('current_category');

        if($currentCategory && $currentCategory->getFaqCategory()){
            $categoryId = $currentCategory->getFaqCategory();
            $questionCollection = $this->questionFactory->getCollection();
            $questionCollection->setPageSize(10);
            $questionCollection->addFieldToFilter('is_active',1);
            $questionCollection->getSelect()
                ->joinLeft(
                    [
                        'cat' => $this->resource->getTableName('lof_faq_question_category')],
                    'cat.question_id = main_table.question_id',
                    [
                        'question_id' => 'question_id',
                        'position' => 'position'
                    ]
                );

            $questionCollection->getSelect()->where('cat.category_id IN (?)', $categoryId);
            $questionCollection->getSelect()->order('position ASC')->order('main_table.question_id DESC')->group('main_table.question_id');
            return $questionCollection;
        }
        return [];
    }
}
