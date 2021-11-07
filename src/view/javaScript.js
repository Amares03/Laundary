
const vision = document.getElementById('visiblity');
const button = document.getElementById('btn');
const table = document.getElementById('table');

button.addEventListener('click',function(){
    

       if(vision.classList.contains('invisible')){
        vision.classList.remove('invisible');
        vision.classList.add('visible');
        table.classList.add('opacity-25');
        
       }
       else{
        vision.classList.remove('visible');
        vision.classList.add('invisible');
        table.classList.remove('opacity-25');
       }

        
});
