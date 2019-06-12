var cities = document.querySelector('#ville');
        


document.querySelector('#ville').addEventListener('keydown',function(){
    var babar = cities.value;
   
    
    fetch('https://vicopo.selfbuild.fr/ville/'+ babar).then(function(response){
        return response.json()
    }).then(function(response){
        
        var myplug = document.querySelector('#myplug'); //recup l'<ul> my plug
        var listLi = myplug.querySelectorAll('li'); //on crée la variable 'list' qui comporte les 'li'
        for(item of listLi){
            myplug.removeChild(item); //on crée une boucle pour supprimer les anciennes listes pas besoin de recharger la page pour effectuer une nouvelle recherche
        }
        // console.log(response.cities);
        for (item of response.cities){ //comme c'est un tableau on crée une boucle pour récupérer chaque 'li'
            elementLi=document.createElement('li'); //on crée l'élément 'li'
            elementLi.innerText=item.city; //recupère les 'li'
            myplug.append(elementLi); //on l'ajoute à l'ul

        } 
    })
});

