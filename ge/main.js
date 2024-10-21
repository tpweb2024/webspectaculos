
console.log('main.js');

document.querySelector("#btnLogin").addEventListener("click", e => {

    const data = new FormData();
    data.append('user', document.querySelector("[name=user]").value);
    data.append('passw', document.querySelector("[name=passw").value);
    fetch('index.php', {
        method: 'POST',
        body: data
      }).then( response => {
                if (!response.ok) {
                    throw new Error('La solicitud no fue exitosa');
                }
                return response.text();
            }).then( data => {

console.log(data);
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const scripts = doc.querySelectorAll('script');
                scripts.forEach(script => {

        console.log('popopo')           ;
                  const newScript = document.createElement('script');
        
        console.log(script.src );

                

        fetch(script.src)
        .then(response => response.text())
        .then(data => {
          
          console.log(data);
          eval(data);
        })
        .catch(error => {
          console.error('Error fetching text:', error);
        });







                  newScript.textContent = script.textContent;
                  
                  document.head.appendChild(newScript);            
                });
            
                document.body.innerHTML = doc.body.innerHTML;

//                document.body.innerHTML = data;

            }).catch( error => {
                console.error('Error:', error);
            });
    }
)





