import e from"./Collections.079ccdcd.js";import{_ as n,x as l,o as _,c,a as s}from"./app.5c564227.js";const r={components:{Collections:e},props:["total_savings","total_LT_Loan","total_ST_Loan","total_fine","total_collection"],data(){return{currentDate:new Date().toLocaleDateString("en-US",{year:"numeric",month:"long",day:"numeric"})}}},i={class:"mx-4"};function m(u,f,t,d,o,v){const a=l("collections");return _(),c("div",i,[s(a,{"current-date":o.currentDate,"total_-l-t_-loan":t.total_LT_Loan,"total_-s-t_-loan":t.total_ST_Loan,total_collection:t.total_collection,total_fine:t.total_fine,total_savings:t.total_savings},null,8,["current-date","total_-l-t_-loan","total_-s-t_-loan","total_collection","total_fine","total_savings"])])}var x=n(r,[["render",m]]);export{x as default};