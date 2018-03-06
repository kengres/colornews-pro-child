(jQuery)(function($) {

		//Title
		wp.customize("kilimandjaro_publications_title", function(value) {
			
	        value.bind(function( to ) {
				
				if( to != '' ) {
					$( '#publications .section-header h2' ).removeClass( 'kilimandjaro_only_customizer' );
					$( '#publications .colored-line').removeClass(  'kilimandjaro_only_customizer' );
				}
				else {
					$( '#publications .section-header h2' ).addClass( 'kilimandjaro_only_customizer' );
					$( '#publications .section-header .colored-line').addClass( 'kilimandjaro_only_customizer' );
				}
				$( '#publications .section-header h2' ).text( to );
		    } );
			
	    });
		
		//Subtitle
		wp.customize("kilimandjaro_publications_subtitle", function(value) {
			
	        value.bind(function( to ) {
				if( to != '' ) {
					$( '#publications .section-header .sub-heading' ).removeClass( 'kilimandjaro_only_customizer' );
				} else {
					$( '#publications .section-header .sub-heading' ).addClass( 'kilimandjaro_only_customizer' );
				}
				$( '#publications .section-header .sub-heading' ).text( to );
			} );
			
	    });

});
