<?php

/**
 * This file is part of the Lean Mapper library (http://www.leanmapper.com)
 *
 * Copyright (c) 2013 Vojtěch Kohout (aka Tharos)
 *
 * For the full copyright and license information, please view the file
 * license.md that was distributed with this source code.
 */

declare(strict_types=1);

namespace LeanMapper;

/**
 * Mapper interface
 *
 * @author Vojtěch Kohout
 */
interface IMapper
{

    /**
     * Gets primary key name from given table name
     */
    public function getPrimaryKey(string $table): string;



    /**
     * Gets table name from given fully qualified entity class name
     */
    public function getTable(string $entityClass): string;



    /**
     * Gets fully qualified entity class name from given table name
     */
    public function getEntityClass(string $table, ?Row $row = null): string;



    /**
     * Gets table column name from given fully qualified entity class name and entity field name
     */
    public function getColumn(string $entityClass, string $field): string;



    /**
     * Gets entity field (property) name from given table name and table column
     */
    public function getEntityField(string $table, string $column): string;



    /**
     * Gets relationship table name from given source table name and target table name
     */
    public function getRelationshipTable(string $sourceTable, string $targetTable): string;



    /**
     * Gets name of column that contains foreign key from given source table name and target table name
     */
    public function getRelationshipColumn(string $sourceTable, string $targetTable, ?string $relationshipName = null): string;



    /**
     * Gets table name from repository class name
     */
    public function getTableByRepositoryClass(string $repositoryClass): string;



    /**
     * Gets filters that should be used used every time when given entity is loaded from database
     *
     * @return array<string>|ImplicitFilters
     */
    public function getImplicitFilters(string $entityClass, ?Caller $caller = null);



    /**
     * @param  array<string, mixed> $values
     * @return array<string, mixed>
     */
    public function convertToRowData(string $table, array $values): array;



    /**
     * @param  array<string, mixed> $data
     * @return array<string, mixed>
     */
    public function convertFromRowData(string $table, array $data): array;

}
