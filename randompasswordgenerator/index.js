let inputslider = document.getElementById('inputslider');
let slidervalue = document.getElementById('slidervalue');
slidervalue.textContent = inputslider.value;
let copyelement = document.getElementById('copyicon');
let lowercase = document.getElementById('lowercase');
let uppercase = document.getElementById('uppercase');
let number=document.getElementById('number');
let symbols=document.getElementById('symbols');
let passwordinput=document.getElementById('passwordinput');
let button=document.getElementById('genbutton');

inputslider.addEventListener('input', () => {
 slidervalue.textContent = inputslider.value;
})
button.addEventListener('click', ()=>{
    passwordinput.value = generatepassword();
});

// variables taken for generating password
let uppercase_Alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let lowercase_Alphabet="abcdefghijklmnopqrstyvwxyz";
let numberspass="0123456789";
let symbolpass="@#$%^&*+";


// function generatepassword()
function generatepassword(){
    let genpassword ="";
    // to get the all checked inputs allchars variable is taken
    let allchars = "";
    allchars += lowercase.checked ? lowercase_Alphabet : "";
    allchars += uppercase.checked ? uppercase_Alphabet : "";
    allchars += symbols.checked ? symbolpass : "";
    allchars += number.checked ? numberspass : "";

    // looping of the below code to make equal to No. of charcters of password using passwordinput id
    let i=1;
    while(i<=inputslider.value){

        genpassword += allchars.charAt(Math.floor(Math.random()* allchars.length));
        i++;
    }
    return genpassword;
}
    if(passwordinput.value != null){
        copyelement.addEventListener('click', ()=>{
            navigator.clipboard.writeText(passwordinput.value);
            copyelement.innerText = "check";
            copyelement.style.color="green";
            copyelement.title = "password copied";
            });
    }
