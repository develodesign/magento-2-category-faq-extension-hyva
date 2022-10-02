<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Develodesign\CategoryFaqExtension\Model\Category\Attribute\Source;

class FaqCategory extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * @param \Lof\Faq\Model\Category $category
     */
    public function __construct(
       protected \Lof\Faq\Model\Category $category
    ){}

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $collection = $this->category->getCollection();
        $categories = [];
        $categories[] = [
            'value' => '',
            'label' => 'Select a Faq category'
        ];
        foreach ($collection as $_cat) {
            $categories[] = [
                'value' => $_cat->getId(),
                'label' => $_cat->getTitle()
            ];
        }
        return $categories;
    }
}

