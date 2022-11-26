import{_ as y,d as x,D as h,o as s,c as n,b as e,f as k,q as a,y as w,F as m,p as v,a as z,x as d,g as i,t as l,h as c,v as V,z as f}from"./app.8d601bc3.js";import"./_baseGetTag.3a301a1a.js";import{M}from"./MemberSearch.62b2b0a3.js";const U={components:{MemberSearch:M},props:{loancategory:Object},data(){return{sponsorsearch:"",members:[],advancesettings:!1}},setup(){return{form:x({user_id:null,principal_amount:null,duration:null,grace_period:null,loan_interest:null,loancategory_id:"Choose a loan type",maturity:"",release_date:"",payment_date:""})}},methods:{setMember(u){this.form.user_id=u.id}}},O=e("div",{class:"text-center bg-blue-200 py-6 mb-6 font-semibold text-xl"},"Add Loan",-1),S={class:"flex w-full justify-center"},D={class:"max-w-2xl md:w-full"},C=e("label",{for:"underline_select",class:"sr-only"},"Loan Type",-1),L=e("option",{selected:""},"Choose a loan type",-1),N=["value"],T={class:"relative z-0 mb-6 w-full group"},A=e("label",{for:"principal_amount",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Principal Amount",-1),B={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},F=e("span",{class:"font-medium"},"Oh, snapp!",-1),j=e("p",{class:"text-xs py-2 mb-4"},"These two fields can be left blank",-1),q={class:"grid gap-6 grid-cols-2"},P={class:"relative z-0 mb-6 w-full group"},R=e("label",{for:"maturity",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Maturity Date",-1),E={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},G=e("span",{class:"font-medium"},"Oh, snapp!",-1),I={class:"relative z-0 mb-6 w-full group"},H=e("label",{for:"release_date",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Release Date",-1),J={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},K=e("span",{class:"font-medium"},"Oh, snapp!",-1),Q={class:"text-center bg-gray-100 p-3 mb-6 font-semibold text-xl"},W={class:"flex items-center"},X=e("label",{for:"link-checkbox",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"See Advance Settings ",-1),Y={class:"relative z-0 mb-6 w-full group"},Z=e("label",{for:"floating_duration",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Duration",-1),$={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ee=e("span",{class:"font-medium"},"Oh, snapp!",-1),re={class:"relative z-0 mb-6 w-full group"},te=e("label",{for:"floating_interest",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Loan Interest",-1),oe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ae=e("span",{class:"font-medium"},"Oh, snapp!",-1),se={class:"grid md:grid-cols-2 md:gap-6"},ne={class:"relative z-0 mb-6 w-full group"},le=e("label",{for:"floating_grace_period",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Grace Period",-1),de={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ie=e("span",{class:"font-medium"},"Oh, snapp!",-1),ce={class:"relative z-0 mb-6 w-full group"},ue=e("label",{for:"payment_date",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Release Date",-1),pe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},me=e("span",{class:"font-medium"},"Oh, snapp!",-1),fe={type:"submit",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"};function be(u,o,b,r,p,g){const _=h("member-search");return s(),n(m,null,[O,e("div",S,[e("div",D,[e("form",{onSubmit:o[9]||(o[9]=k(t=>r.form.post("/loans/create"),["prevent"]))},[C,a(e("select",{"onUpdate:modelValue":o[0]||(o[0]=t=>r.form.loancategory_id=t),id:"underline_select",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},[L,(s(!0),n(m,null,v(b.loancategory,(t,ge)=>(s(),n("option",{value:t.id},l(t.name)+"}",9,N))),256))],512),[[w,r.form.loancategory_id]]),z(_,{onMember:g.setMember,title:"Member",url:"/getmembers"},null,8,["onMember"]),e("div",T,[a(e("input",{"onUpdate:modelValue":o[1]||(o[1]=t=>r.form.principal_amount=t),type:"number",name:"principal_amount",id:"principal_amount",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[d,r.form.principal_amount]]),A,r.form.errors.principal_amount?(s(),n("p",B,[F,i(" "+l(r.form.errors.principal_amount)+".",1)])):c("",!0)]),j,e("div",q,[e("div",P,[a(e("input",{"onUpdate:modelValue":o[2]||(o[2]=t=>r.form.maturity=t),type:"date",name:"maturity",id:"maturity",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.maturity]]),R,r.form.errors.maturity?(s(),n("p",E,[G,i(" "+l(r.form.errors.maturity)+".",1)])):c("",!0)]),e("div",I,[a(e("input",{"onUpdate:modelValue":o[3]||(o[3]=t=>r.form.release_date=t),type:"date",name:"release_date",id:"release_date",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.release_date]]),H,r.form.errors.release_date?(s(),n("p",J,[K,i(" "+l(r.form.errors.release_date)+".",1)])):c("",!0)])]),e("div",Q,[e("div",W,[a(e("input",{"onUpdate:modelValue":o[4]||(o[4]=t=>p.advancesettings=t),id:"link-checkbox",type:"checkbox",value:"",class:"w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[V,p.advancesettings]]),X])]),a(e("div",null,[e("div",Y,[a(e("input",{"onUpdate:modelValue":o[5]||(o[5]=t=>r.form.duration=t),type:"number",name:"floating_duration",id:"floating_duration",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.duration]]),Z,r.form.errors.duration?(s(),n("p",$,[ee,i(" "+l(r.form.errors.duration)+".",1)])):c("",!0)]),e("div",re,[a(e("input",{type:"number","onUpdate:modelValue":o[6]||(o[6]=t=>r.form.loan_interest=t),name:"interest",id:"floating_interest",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.loan_interest]]),te,r.form.errors.loan_interest?(s(),n("p",oe,[ae,i(" "+l(r.form.errors.loan_interest)+".",1)])):c("",!0)]),e("div",se,[e("div",ne,[a(e("input",{"onUpdate:modelValue":o[7]||(o[7]=t=>r.form.grace_period=t),type:"text",name:"floating_grace_period",id:"floating_grace_period",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.grace_period]]),le,r.form.errors.grace_period?(s(),n("p",de,[ie,i(" "+l(r.form.errors.grace_period)+".",1)])):c("",!0)]),e("div",ce,[a(e("input",{"onUpdate:modelValue":o[8]||(o[8]=t=>r.form.payment_date=t),type:"date",name:"payment_date",id:"payment_date",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[d,r.form.payment_date]]),ue,r.form.errors.payment_date?(s(),n("p",pe,[me,i(" "+l(r.form.errors.payment_date)+".",1)])):c("",!0)])])],512),[[f,p.advancesettings]]),a(e("button",fe,"Submit",512),[[f,!r.form.processing]])],32)])])],64)}var he=y(U,[["render",be]]);export{he as default};