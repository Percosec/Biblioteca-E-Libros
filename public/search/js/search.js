export class search{
    constructor(myurlp,mysearchp,ul_add_lip){
        this.url = myurlp;
        this.mysearch = mysearchp;
        this.ul_add_li = ul_add_lip;
        this.idli = "mylist";
        this.pcantidad = document.querySelector("#pcantidad");
    }

    InputSearch(){
        this.mysearch.addEventListener('input', (event) => {
            event.preventDefault();
            try{
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let minimo_letras = 0;
                let valor = this.mysearch.value;
                console.log(valor)
            }catch(e){
                 
            }
        });
    }
}

const mysearchp = document.querySelector("#mysearch");
const ul_add_lip = document.querySelector("#showlist");
const myurlp ="/myurl";
const searchproduct = new search(myurlp,mysearchp,ul_add_lip);
searchproduct.InputSearch();