import{_ as c,e as l,G as n,o as d,c as r,b as t,t as s,a as i,F as _}from"./app.25208d11.js";import"./_baseGetTag.ffd793a0.js";import{M as p}from"./MemberSearch.945c6c65.js";import{P as m}from"./PaymentForm.b286f9c3.js";const x={components:{PaymentForm:m,MemberSearch:p},props:{loan:Object},setup(){return{form:l({payment_method:"Choose Payment Method",amount:null,payment_date:"",user_id:"hello",transaction_ref:"hello"})}},methods:{setUser(a){this.form.user_id=a.id}}},y={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},h=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-2"}," Released "),t("th",{scope:"col",class:"py-3 px-2"}," Maturity "),t("th",{scope:"col",class:"py-3 px-2"}," Principal Amount "),t("th",{scope:"col",class:"py-3 px-2"}," Duration "),t("th",{scope:"col",class:"py-3 px-2"}," Interest % "),t("th",{scope:"col",class:"py-3 px-2"}," Interest "),t("th",{scope:"col",class:"py-3 px-2"}," Due "),t("th",{scope:"col",class:"py-3 px-2"}," Paid "),t("th",{scope:"col",class:"py-3 px-2"}," Balance ")])],-1),u={class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"},f={class:"text-sm py-4 px-2"},b={class:"text-sm py-4 px-2"},g={class:"text-sm py-4 px-2"},v={class:"text-xs py-4 px-2"},k={class:"flex items-center"},P={class:"py-4 px-2"},B={class:"flex items-center"},F={class:"py-4 px-2"},M={class:"flex items-center"},C={class:"py-4 px-2"},D={class:"flex items-center"},w={class:"py-4 px-2"},A={class:"flex items-center"},I={class:"py-4 px-2"},N={class:"flex items-center"},S=t("div",{class:"text-center bg-blue-200 py-6 mb-0 font-semibold text-xl"},"Add Loan Payment",-1);function V(a,j,e,E,G,L){const o=n("payment-form");return d(),r(_,null,[t("table",y,[h,t("tbody",null,[t("tr",u,[t("td",f,s(e.loan.data.release),1),t("td",b,s(e.loan.data.maturity),1),t("td",g," \u20A6"+s(e.loan.data.principal_amount),1),t("td",v,[t("div",k,s(e.loan.data.duration),1)]),t("td",P,[t("div",B,s(e.loan.data.loan_interest),1)]),t("td",F,[t("div",M," \u20A6"+s(e.loan.data.interest_maturity),1)]),t("td",C,[t("div",D," \u20A6"+s(e.loan.data.due),1)]),t("td",w,[t("div",A," \u20A6"+s(e.loan.data.paid),1)]),t("td",I,[t("div",N," \u20A6"+s(e.loan.data.balance),1)])])])]),S,i(o,{url:"/repayment/"+e.loan.data.id+"/addpayment"},null,8,["url"])],64)}var z=c(x,[["render",V]]);export{z as default};