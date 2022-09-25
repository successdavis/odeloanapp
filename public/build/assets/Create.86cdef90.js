import{_ as c,d as f,o as n,c as s,b as e,t as a,f as p,q as l,x as b,g as i,h as m,y as g,z as x,F as _,i as h}from"./app.54ec1f71.js";const y={props:{Member:Object,transaction_ref:String},setup(u){return{form:f({name:"Choose Fine",amount:null})}}},v={class:"text-center bg-blue-200 py-6 mb-0 font-semibold text-xl"},k=i("Create Fine for "),w={class:"flex w-full justify-center mt-8"},S={class:"max-w-2xl md:w-full"},F={class:"relative z-0 mb-6 w-full group"},M=e("label",{for:"amount",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"}," Fine Amount",-1),C={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},L=e("span",{class:"font-medium"},"Oh, snapp!",-1),T=e("label",{for:"underline_select",class:"sr-only"},"Purpose",-1),V=h('<option selected="">Choose Fine</option><option value="Long Term Loan Saving Fine">Absent From Meeting</option><option value="Short Term Loan Saving Fine">Late Coming to Meeting</option><option value="Short Term Loan Saving Fine">Noise</option><option value="Short Term Loan Saving Fine">Quarrel or Fight</option>',5),N=[V],z={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},B=e("span",{class:"font-medium"},"Oh, snapp!",-1),O={type:"submit",class:"mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"};function j(u,t,d,o,q,A){return n(),s(_,null,[e("div",v,[k,e("span",null,a(d.Member.name),1)]),e("div",w,[e("div",S,[e("form",{onSubmit:t[2]||(t[2]=p(r=>o.form.post("/fine/create-fine/"+d.Member.id),["prevent"]))},[e("div",F,[l(e("input",{"onUpdate:modelValue":t[0]||(t[0]=r=>o.form.amount=r),type:"number",name:"amount",id:"amount",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[b,o.form.amount]]),M,o.form.errors.amount?(n(),s("p",C,[L,i(" "+a(o.form.errors.amount)+".",1)])):m("",!0)]),T,l(e("select",{"onUpdate:modelValue":t[1]||(t[1]=r=>o.form.name=r),id:"underline_select",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},N,512),[[g,o.form.name]]),o.form.errors.name?(n(),s("p",z,[B,i(" "+a(o.form.errors.name)+".",1)])):m("",!0),l(e("button",O,"Submit",512),[[x,!o.form.processing]])],32)])])],64)}var U=c(y,[["render",j]]);export{U as default};
