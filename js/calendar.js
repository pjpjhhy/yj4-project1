import { today } from "../config/date.js";
import { updateQuery } from "./list.js";

const yearAndMonth=document.querySelector(".banner h3");
const dates=document.querySelector(".dates");
const navs=document.querySelectorAll("#prev,#next");
export let selectedDay = today;

const months=[
  "1월",
  "2월",
  "3월",
  "4월",
  "5월",
  "6월",
  "7월",
  "8월",
  "9월",
  "10월",
  "11월",
  "12월"
];

let date=new Date();
let month=date.getMonth();
let year=date.getFullYear();

function renderCalendar(){

  let datesHtml="";

  const start=new Date(year,month,1).getDay();
  const endDate=new Date(year,month+1,0).getDate();
  const end=new Date(year,month,endDate).getDay();
  const endDatePrev=new Date(year,month,0).getDate();

  for(let i=start; i>0; i--){
    datesHtml+=`<li class="inactive">${endDatePrev -i+1}</li>`
  }

  for(let i = 1; i <= endDate; i++){
    let className = (
    i === date.getDate() && 
    month === new Date().getMonth() && 
    year === new Date().getFullYear()
    ) ? ' class="today"' : "";
    datesHtml += `<li${className}>${i}</li>`;
}


  for(let i=end; i<6;i++) {
    datesHtml+=`<li class="inactive">${i-end+1}</li>`;
  }

  dates.innerHTML=datesHtml;
  yearAndMonth.textContent=`${year}년 ${months[month]} `;
}

navs.forEach(nav=>{
  nav.addEventListener("click",e=>{
    const btnId=e.target.id;

    if(btnId==="prev"&&month===0){
      year--;
      month=11;
    } else if(btnId==="next"&&month===11){
      year++;
      month=0;
    } else {
      month=btnId==="next"? month+1 :month-1;
    }

    date=new Date(year,month,new Date().getDate())
    year=date.getFullYear();
    month=date.getMonth();

    renderCalendar();
    select();
  })
})

//날짜선택
let selectedDate;
export function select() {
  document.querySelectorAll(".dates li").forEach(function (day) {
    day.addEventListener("click", function () {
      document.querySelectorAll(".dates li").forEach(function (otherDay) {
        otherDay.classList.remove("selected");
      });
      this.classList.add("selected");
      selectedDate = parseInt(this.textContent);
      selectedDay = renderSelectedDateInfo();
      updateQuery();
    });
  });
}

function renderSelectedDateInfo() {
  let selectedDateInfo = year + ("00"+(month + 1).toString()).slice(-2) + ("00"+selectedDate.toString()).slice(-2);
  return selectedDateInfo;
}

renderCalendar();
select();

//캘린더 이벤트
const clickDate=document.querySelector(".click-date");
const calendarWrap=document.querySelector(".wrap");
const closeButton=document.querySelector(".close-button");

clickDate.addEventListener("click",function(){
  calendarWrap.classList.toggle("date-hidden");
})

closeButton.addEventListener("click",function(){
  calendarWrap.classList.add("date-hidden");
})

document.addEventListener("click", function(e) {
  if (!calendarWrap.contains(e.target) && e.target !== clickDate) {
    calendarWrap.classList.add("date-hidden");
  }
});