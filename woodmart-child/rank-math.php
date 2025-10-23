add_filter( 'rank_math/snippet/rich_snippet_product_entity', function( $entity ) {
        unset($entity['offers']['priceSpecification']);
	return $entity;
});