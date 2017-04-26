function EscreveData() {

var mydate=new Date()

var year=mydate.getYear()

if (year < 1000)

year+=1900

var day=mydate.getDay()

var month=mydate.getMonth()

var daym=mydate.getDate()

if (daym<10)

daym="0"+daym

var dayarray=new

Array("domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado")

var montharray=new

Array("Jaineiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro")

document.write(""+dayarray[day]+", "+daym+" de "+montharray[month]+" de "+year+"</b></font></small>")

}

function EscreveHora() {

agora = new Date (); horas = agora.getHours ();

minutos = agora.getMinutes ();

if (horas < 10) horas = "0" + horas;

if (minutos < 10) minutos = "0" + minutos;

document.write(horas+":" +minutos+ "h");

}