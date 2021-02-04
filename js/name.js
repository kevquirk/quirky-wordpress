// Credit for this script goes to Nathan Degruchy - https://degruchy.org
document.addEventListener( "DOMContentLoaded", ( event ) => {
			const elem = document.getElementById( "name" ),
          text = "Hi, {{name}}! 👋 I’m Kev, a cyber security professional, nerd and privacy advocate from the UK 🇬🇧. Welcome to my little corner of the Internet.";

			function changeName( person ) {
				person = person.trim();
				elem.innerHTML = text.replace( "{{name}}", person );
				window.localStorage.setItem( "name", person );
			}

			if ( window.localStorage.getItem( "name" ) ) {
				changeName( window.localStorage.getItem( "name" ).trim() );
			}

			elem.addEventListener( "click", ( event ) => {
				var response = prompt( "What is your first name?" );

				if ( response.trim() ) {
					changeName( response );
				}
			});
		});
