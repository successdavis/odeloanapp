import{_ as b,e as _,G as y,o as a,c as s,b as e,g as h,v as n,z as u,h as d,t as m,i,A as x,a as g,B as k,j as v}from"./app.c01b2d03.js";import"./_baseGetTag.85e5ab35.js";import{M as w}from"./MemberSearch.134ed08c.js";const M={components:{MemberSearch:w},props:{url:String},setup(){return{form:_({payment_method:"Choose Payment Method",amount:null,payment_date:"",user_id:"hello",transaction_ref:"hello"})}},methods:{setUser(l){this.form.user_id=l.id}}},C={class:"flex w-full justify-center mt-8"},S={class:"max-w-2xl md:w-full"},V={class:"relative z-0 mb-6 w-full group"},P=e("label",{for:"principal_amount",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"}," Payment Amount",-1),T={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},z=e("span",{class:"font-medium"},"Oh, snapp!",-1),B=e("label",{for:"underline_select",class:"sr-only"},"Payment method",-1),N=v('<option selected="">Choose Payment Method</option><option value="Cash">Cash</option><option value="ATM">ATM</option><option value="Cheque">Cheque</option><option value="Transfer">Transfer</option>',5),U=[N],A={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},q=e("span",{class:"font-medium"},"Oh, snapp!",-1),D={class:"mt-5"},O=e("p",{class:"text-xs py-2 mb-4"},"If payment date is left blank, it will default to today's date",-1),j={class:"relative z-0 mb-6 w-full group"},F=e("label",{for:"maturity",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Payment Date",-1),E={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},G=e("span",{class:"font-medium"},"Oh, snapp!",-1),I={type:"submit",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"};function H(l,o,c,t,J,p){const f=y("member-search");return a(),s("div",C,[e("div",S,[e("form",{onSubmit:o[3]||(o[3]=h(r=>t.form.post(c.url),["prevent"]))},[e("div",V,[n(e("input",{"onUpdate:modelValue":o[0]||(o[0]=r=>t.form.amount=r),type:"number",name:"principal_amount",id:"principal_amount",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,t.form.amount]]),P,t.form.errors.amount?(a(),s("p",T,[z,d(" "+m(t.form.errors.amount)+".",1)])):i("",!0)]),B,n(e("select",{"onUpdate:modelValue":o[1]||(o[1]=r=>t.form.payment_method=r),id:"underline_select",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},U,512),[[x,t.form.payment_method]]),t.form.errors.payment_method?(a(),s("p",A,[q,d(" "+m(t.form.errors.payment_method)+".",1)])):i("",!0),e("div",D,[g(f,{url:"/getusers",title:"Collected By",onMember:p.setUser},null,8,["onMember"])]),O,e("div",j,[n(e("input",{"onUpdate:modelValue":o[2]||(o[2]=r=>t.form.payment_date=r),type:"date",name:"maturity",id:"maturity",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[u,t.form.payment_date]]),F,t.form.errors.payment_date?(a(),s("p",E,[G,d(" "+m(t.form.errors.payment_date)+".",1)])):i("",!0)]),n(e("button",I,"Submit",512),[[k,!t.form.processing]])],32)])])}var R=b(M,[["render",H]]);export{R as P};
