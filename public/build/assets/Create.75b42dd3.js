import{P as a}from"./PaymentForm.f52baef0.js";import{_ as n,G as s,o as c,c as r,b as t,t as m,a as l,F as p,h as i}from"./app.d38d19a0.js";import"./_baseGetTag.1d57a458.js";import"./MemberSearch.ec52c389.js";const _={components:{PaymentForm:a},props:{account:Object}},d={class:"text-center bg-blue-200 py-6 mb-0 font-semibold text-xl"},u=i("Add Savings to ");function f(b,x,e,v,y,g){const o=s("payment-form");return c(),r(p,null,[t("div",d,[u,t("span",null,m(e.account.member.name),1)]),l(o,{url:"/account/"+e.account.id+"/savetransaction"},null,8,["url"])],64)}var V=n(_,[["render",f]]);export{V as default};