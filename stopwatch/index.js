let timedisp = document.querySelector('.timedisp');
let start = document.getElementById('start');
let stop = document.getElementById('stop');
let reset = document.getElementById('reset');

let msec = 00;
let secs = 00;
let mins = 00;
let date = new Date();
let millisec = date.getMilliseconds();


let timerId = null;
start.addEventListener('click', function(){
    if(timerId!=null)
    {
        clearInterval(timerId);
    }
   timerId = setInterval(starttimer, 10);
   
});

stop.addEventListener('click', function(){
    clearInterval(timerId);
});

reset.addEventListener('click', function(){
    clearInterval(timerId);
    timedisp.innerHTML = `00 : 00 : 00`;
    msec = secs = mins =00;
});


function starttimer (){
    msec++;
    if(msec == 100)
    {
        msec = 0;
        secs++
        if(secs == 60)
        {
            secs = 00;
            mins++;
        }
    }
let msecstring = msec < 10 ? `0${msec}`: msec;
let secstring = secs < 10 ? `0${secs}`: secs;
let minstring = mins < 10 ? `0${mins}`: mins;

timedisp.innerHTML = `${minstring} : ${secstring} : ${msecstring}`;
}