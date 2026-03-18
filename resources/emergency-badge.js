( function () {
	const badge = document.createElement( 'span' );
	badge.className = 'emergency-badge';
	badge.setAttribute( 'role', 'img' );
	badge.setAttribute( 'aria-label', 'שאגת הארי' );

	const logo = document.getElementById( 'p-logo' );
	if ( logo ) {
		logo.insertAdjacentElement( 'afterend', badge );
	}
}() );
