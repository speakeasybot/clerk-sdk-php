<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


/** Domains - A list of domains */
class Domains
{
    /**
     * $data
     *
     * @var array<Domain> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Clerk\Backend\Models\Components\Domain>')]
    public array $data;

    /**
     * Total number of domains
     *
     *
     *
     * @var int $totalCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_count')]
    public int $totalCount;

    /**
     * @param  array<Domain>  $data
     * @param  int  $totalCount
     */
    public function __construct(array $data, int $totalCount)
    {
        $this->data = $data;
        $this->totalCount = $totalCount;
    }
}