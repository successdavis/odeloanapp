import{_ as i,L as u,D as m,o as b,c as l,b as t,a as n,w as r,F as f,g as s,t as c}from"./app.54ec1f71.js";import{A as g,h as _}from"./AvatarForm.58a2ded3.js";import{U as h}from"./UserCards.cd8b6c13.js";const x={components:{UserCards:h,AvatarForm:g,Link:u},props:{borrowedfunds:String,savingsbalance:String,member:Object,nextpaymentdue:String,nextpayment:String},methods:{dateTime(o){return _(o).fromNow()}}},v={class:"flex justify-center gap-6 items-center mb-4 bg-gray-900 text-white"},w=["src"],y={class:"grid"},p={class:"mt-4"},k=s("View Savings"),S=s("Fines");function F(o,L,e,N,V,A){const a=m("Link"),d=m("user-cards");return b(),l(f,null,[t("div",v,[t("img",{src:e.member.avatar_path,class:"m-3 w-12 h-12 rounded-lg shadow-lg",alt:"User Avatar"},null,8,w),n(a,{href:"/members/"+e.member.id+"/profile",class:"text-2xl font-bold uppercase"},{default:r(()=>[s(c(e.member.title+" "+e.member.name)+" - "+c(e.member.account_number),1)]),_:1},8,["href"])]),t("div",y,[n(d,{nextpaymentdue:e.nextpaymentdue,nextpayment:e.nextpayment,borrowedfunds:e.borrowedfunds,savingsbalance:e.savingsbalance},null,8,["nextpaymentdue","nextpayment","borrowedfunds","savingsbalance"])]),t("div",p,[n(a,{href:"/account/"+e.member.id+"/view-account",type:"button",class:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:r(()=>[k]),_:1},8,["href"]),n(a,{href:"/fine/member-fine/"+e.member.id,type:"button",class:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:r(()=>[S]),_:1},8,["href"])])],64)}var j=i(x,[["render",F]]);export{j as default};