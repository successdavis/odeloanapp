import{_ as p,d as f,o as a,c as s,b as t,f as b,h as l,q as d,x as c,g as m,t as i,y,z as _,i as h}from"./app.9d9f5773.js";import"./_baseGetTag.20f80389.js";import{M as x}from"./MemberSearch.0c25ef6e.js";const g={components:{MemberSearch:x},props:{url:String,transaction_ref:String},setup(n){return{form:f({payment_method:"Choose Payment Method",amount:null,payment_date:"",transaction_ref:n.transaction_ref})}},methods:{setUser(n){this.form.user_id=n.id}}},k={class:"flex w-full justify-center mt-8"},w={class:"max-w-2xl md:w-full"},v={key:0,class:"text-red-600 mb-6"},M={class:"relative z-0 mb-6 w-full group"},S=t("label",{for:"principal_amount",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"}," Payment Amount",-1),P={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},C=t("span",{class:"font-medium"},"Oh, snapp!",-1),T=t("label",{for:"underline_select",class:"sr-only"},"Payment method",-1),V=h('<option selected="">Choose Payment Method</option><option value="Cash">Cash</option><option value="ATM">ATM</option><option value="Cheque">Cheque</option><option value="Transfer">Transfer</option>',5),z=[V],q={key:1,class:"mt-2 text-sm text-red-600 dark:text-red-500"},N=t("span",{class:"font-medium"},"Oh, snapp!",-1),U=t("p",{class:"text-xs py-2 mb-4"},"If payment date is left blank, it will default to today's date",-1),A={class:"relative z-0 mb-6 w-full group"},B=t("label",{for:"maturity",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Payment Date",-1),D={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},O=t("span",{class:"font-medium"},"Oh, snapp!",-1),E={type:"submit",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"};function F(n,r,u,e,j,I){return a(),s("div",k,[t("div",w,[t("form",{onSubmit:r[3]||(r[3]=b(o=>e.form.post(u.url),["prevent"]))},[e.form.errors.transaction_ref?(a(),s("div",v,"Payment Error: This payment has been added")):l("",!0),t("div",M,[d(t("input",{"onUpdate:modelValue":r[0]||(r[0]=o=>e.form.amount=o),type:"number",name:"principal_amount",id:"principal_amount",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[c,e.form.amount]]),S,e.form.errors.amount?(a(),s("p",P,[C,m(" "+i(e.form.errors.amount)+".",1)])):l("",!0)]),T,d(t("select",{"onUpdate:modelValue":r[1]||(r[1]=o=>e.form.payment_method=o),id:"underline_select",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},z,512),[[y,e.form.payment_method]]),e.form.errors.payment_method?(a(),s("p",q,[N,m(" "+i(e.form.errors.payment_method)+".",1)])):l("",!0),U,t("div",A,[d(t("input",{"onUpdate:modelValue":r[2]||(r[2]=o=>e.form.payment_date=o),type:"date",name:"maturity",id:"maturity",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"},null,512),[[c,e.form.payment_date]]),B,e.form.errors.payment_date?(a(),s("p",D,[O,m(" "+i(e.form.errors.payment_date)+".",1)])):l("",!0)]),d(t("button",E,"Submit",512),[[_,!e.form.processing]])],32)])])}var K=p(g,[["render",F]]);export{K as P};