import{_ as c,d as n,D as l,o as r,c as d,b as t,t as s,a as i,F as _}from"./app.8d601bc3.js";import"./_baseGetTag.3a301a1a.js";import{M as p}from"./MemberSearch.62b2b0a3.js";import{P as m}from"./PaymentForm.0130b63e.js";const x={components:{PaymentForm:m,MemberSearch:p},props:{loan:Object,transaction_ref:String},setup(){return{form:n({payment_method:"Choose Payment Method",amount:null,payment_date:"",user_id:"hello",transaction_ref:"hello"})}},methods:{setUser(a){this.form.user_id=a.id}}},y={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},h=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-2"}," Released "),t("th",{scope:"col",class:"py-3 px-2"}," Maturity "),t("th",{scope:"col",class:"py-3 px-2"}," Principal Amount "),t("th",{scope:"col",class:"py-3 px-2"}," Duration "),t("th",{scope:"col",class:"py-3 px-2"}," Interest % "),t("th",{scope:"col",class:"py-3 px-2"}," Interest "),t("th",{scope:"col",class:"py-3 px-2"}," Due "),t("th",{scope:"col",class:"py-3 px-2"}," Paid "),t("th",{scope:"col",class:"py-3 px-2"}," Balance ")])],-1),u={class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"},f={class:"text-sm py-4 px-2"},g={class:"text-sm py-4 px-2"},b={class:"text-sm py-4 px-2"},v={class:"text-xs py-4 px-2"},k={class:"flex items-center"},P={class:"py-4 px-2"},B={class:"flex items-center"},D={class:"py-4 px-2"},F={class:"flex items-center"},M={class:"py-4 px-2"},C={class:"flex items-center"},S={class:"py-4 px-2"},w={class:"flex items-center"},A={class:"py-4 px-2"},I={class:"flex items-center"},N=t("div",{class:"text-center bg-blue-200 py-6 mb-0 font-semibold text-xl"},"Add Loan Payment",-1);function V(a,j,e,E,L,O){const o=l("payment-form");return r(),d(_,null,[t("table",y,[h,t("tbody",null,[t("tr",u,[t("td",f,s(e.loan.data.release),1),t("td",g,s(e.loan.data.maturity),1),t("td",b," \u20A6"+s(e.loan.data.principal_amount),1),t("td",v,[t("div",k,s(e.loan.data.duration),1)]),t("td",P,[t("div",B,s(e.loan.data.loan_interest),1)]),t("td",D,[t("div",F," \u20A6"+s(e.loan.data.interest_maturity),1)]),t("td",M,[t("div",C," \u20A6"+s(e.loan.data.due),1)]),t("td",S,[t("div",w," \u20A6"+s(e.loan.data.paid),1)]),t("td",A,[t("div",I," \u20A6"+s(e.loan.data.balance),1)])])])]),N,i(o,{transaction_ref:e.transaction_ref,url:"/repayment/"+e.loan.data.id+"/addpayment"},null,8,["transaction_ref","url"])],64)}var G=c(x,[["render",V]]);export{G as default};