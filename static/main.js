		(function() {
            const token = localStorage.getItem('access_token');
            
            if (!token) {
                // Redirect to login before loading the content
                alert('Access denied. Please log in.');
                window.location.href = 'index.php';
            }
        })();
		window.onload = function() {
            /*const token = localStorage.getItem('access_token');
			
            if (!token) {
                alert('Access denied. Please log in.');
                window.location.href = 'index.php';
            }*/
			
			document.getElementById('logout').addEventListener('click', handleLogout);
        };
		/*async function fetchUserData() {
            const token = localStorage.getItem('access_token');
            const response = await fetch('http://your-backend-domain.com/api/user-profile/', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                }
            });

            if (response.ok) {
                const data = await response.json();
                document.getElementById('user-profile').textContent = `Welcome, ${data.username}`;
            } else {
                alert('Failed to fetch user data. Please log in again.');
                localStorage.removeItem('access_token');
                window.location.replace = 'index.php';
            }
        }*/
		
		async function handleLogout(){
			localStorage.clear();
			
			window.location.href = 'index.php';
			
		}