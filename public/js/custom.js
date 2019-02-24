let deleteRow = document.querySelectorAll('.delete-data');
let alert = document.querySelectorAll('.alert');

if(deleteRow){
    deleteRow.forEach((item)=>{
        item.addEventListener('click',(e)=>{
            e.preventDefault();
            let tag = e.currentTarget;
            axios.delete(tag.getAttribute("href"))
                .then(function (response) {
                    if(response.data){
                        let parent = tag.parentNode.parentNode;
                        parent.remove();
                        document.getElementById('success').classList.remove('d-none');
                    }
                    else
                    {
                        document.getElementById('fail').classList.remove('d-none');
                    }
                })
        })
    })
}

if(alert){
    alert.forEach((item)=>{
        item.addEventListener('click',(e)=>{
            let tag = e.currentTarget;
            tag.classList.add('d-none');
        })
    })
}
