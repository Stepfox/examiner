(function( wp ) {
    var __ = wp.i18n.__;
    var createHigherOrderComponent = wp.compose.createHigherOrderComponent;
    var addFilter = wp.hooks.addFilter;

    var withDefaultContext = createHigherOrderComponent(function( BlockEdit ) {
        return function( props ) {
            // Only target the core/post-template block.
            if ( props.name === 'core/post-template' ) {
                // Check if the block is missing the Query context.
                if ( ! props.context || ! props.context.query || ( typeof props.context.query === 'object' && Object.keys( props.context.query ).length === 0 ) ) {
                    // Supply a default query context.
                    // Adjust these default parameters as needed.
                    props.context = {
                        query: {
                            perPage: 1,
                            postType: 'post',
                            order: 'desc',
                            orderBy: 'date'
                        }
                    };
                }
            }
            return wp.element.createElement( BlockEdit, props );
        };
    }, 'withDefaultContext' );

    addFilter( 'editor.BlockEdit', 'my-namespace/with-default-context', withDefaultContext );
})( window.wp );