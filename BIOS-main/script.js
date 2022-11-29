const nome = document.querySelector('#nome');
const senha = document.querySelector('#senha');
const email = document.querySelector('#email');
const profissao = document.querySelector('#profissao');
const cpf = document.querySelector('#cpf');


function cadastrar(){
    if(nome.value != "" && email.value != "" && senha.value != "" && profissao.value != "" && cpf.value != ""){    
        const arrayUser = [];
        const user = {
            nome: nome.value,
            email: email.value,
            senha: senha.value,
            profissao: profissao.value,
            cpf: cpf.value
        };
    
        if(localStorage.getItem("users")){
            const users = JSON.parse(localStorage.getItem("users"));
            console.log(users);
            let find = false;
            users.forEach((e) => {
                if(e.email == email.value){
                    find = true;
                    document.querySelector('#message').innerHTML = "Usuário já cadastrado";
                }
                arrayUser.push(e);       
            });
            console.log(arrayUser);
            if(find){
                return;
            }
        }
        console.log(arrayUser);
        let senhaSplit = senha.value.split("");
        if(senhaSplit.length < 8){
            document.querySelector('#message').innerHTML = "<p>Senha fraca - usuário não cadastrado </p>";
        }
        if(senhaSplit.length  >= 8 && senhaSplit.length <= 10){
            arrayUser.push(user);
            document.querySelector('#message').innerHTML = "<p>Senha média - entre 8 caracteres 10 caracteres<p>";
        }
        if(senhaSplit.length > 10){
            arrayUser.push(user);
            document.querySelector('#message').innerHTML =  "<p>senha forte - mais de 10 caracteres.</p";
        }
        localStorage.setItem("users",JSON.stringify(arrayUser));
    }
    else{
        document.querySelector('#message').innerHTML = "Preencha todos os campos";
    }
}
function logar(){
    document.querySelector("#form-login").addEventListener("submit", async (e) => {
      
    });
        const arrayUser = [];
        document.querySelector('#message').innerHTML = "";

        if(localStorage.getItem("users")){
            const users = JSON.parse(localStorage.getItem("users"));
            
            users.forEach((e) => {
                if(e.email == email.value && e.senha == senha.value){
                    document.querySelector('#message').innerHTML = "Login realizado";
                   
                    location.href = "./index.html"
                }
                else{
                    document.querySelector('#message').innerHTML = "Usuário não encontrado";
                }
            });
            console.log(arrayUser);
        }
    }



/*
function pesquisarF(){
    let urlLeg = document.querySelector('#addLeg');
    let pesquisarBtn = document.querySelector('#pesquisarBtn');
    let pesquisar = document.querySelector('#pesquisar');

    
} */



