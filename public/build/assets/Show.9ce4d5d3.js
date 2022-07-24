import{_ as g,L as u,e as m,E as p,o as l,c,b as t,t as e,a as y,w as b,s as f,y as v,F as h,m as w,h as r}from"./app.38cd2be3.js";const k={components:{Link:u},props:{payments:Object,account:Object,totalSaving:String,totalInterest:String,grandTotal:String},data(){return{editInterest:!1}},setup(d){return{form:m({interest:d.account.interest})}},methods:{setInterest(){this.form.post("/account/"+this.account.id+"/set-interest",{preserveScroll:!0})}}},C={class:"grid-cols-3 grid"},S={class:"w-64 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"},B=t("div",{class:"flex justify-end px-2 pt-2"},null,-1),I={class:"flex flex-col items-center pb-10"},L=["src"],M={class:"mb-1 text-xl font-medium text-gray-900 dark:text-white"},T={class:"text-sm text-gray-500 dark:text-gray-400"},j={class:"flex mt-4 space-x-3 lg:mt-6"},z=r("Add Transaction"),D={class:"grid divide-y w-64 p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center"},V={class:"flex justify-center items-center"},F=t("p",{class:"text-2xl"},"Total Savings",-1),H={class:"text-4xl"},N={class:"flex justify-center items-center"},A=t("p",{class:"text-2xl"},"Total Interest",-1),E={class:"text-4xl"},O={class:"grid divide-y w-64 p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center"},G={class:"flex justify-center items-center"},P=t("p",{class:"text-2xl"},"Interest",-1),U=t("p",{class:"text-xs"},"Change Value",-1),q={class:"flex justify-center items-center"},J=t("p",{class:"text-2xl"},"Grand Total",-1),K={class:"text-4xl"},Q={class:"mt-9"},R={class:"overflow-x-auto relative shadow-md sm:rounded-lg"},W={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},X=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-6"}," Payment Date "),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[r(" Collected By "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[r(" Method "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[r(" Amount "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("span",{class:"sr-only"},"Delete")])])],-1),Y={scope:"row",class:"py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"},Z={class:"py-4 px-6"},$={class:"py-4 px-6"},tt={class:"py-4 px-6"},et=t("td",{class:"py-4 px-6 text-right"},[t("a",{href:"#",class:"font-medium text-blue-600 dark:text-blue-500 hover:underline"},"Delete")],-1),st={class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700"},ot=t("th",{scope:"row",class:"py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"},null,-1),at=t("td",{class:"py-4 px-6"},null,-1),rt=t("td",{class:"py-4 px-6"},null,-1),lt={class:"py-4 px-6 font-bold"},ct=t("td",{class:"py-4 px-6 text-right"},null,-1);function dt(d,a,s,n,nt,i){const x=p("Link");return l(),c(h,null,[t("div",C,[t("div",S,[B,t("div",I,[t("img",{class:"mb-3 w-24 h-24 rounded-full shadow-lg",src:s.account.member.avatar_path,alt:"Bonnie image"},null,8,L),t("h5",M,e(s.account.member.name),1),t("span",T,e(s.account.member.mobile),1),t("div",j,[y(x,{href:"/account/"+s.account.id+"/addtransaction",class:"inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:b(()=>[z]),_:1},8,["href"])])])]),t("div",D,[t("div",V,[t("div",null,[F,t("div",H,"\u20A6 "+e(s.totalSaving),1)])]),t("div",N,[t("div",null,[A,t("div",E,"\u20A6 "+e(s.totalInterest),1)])])]),t("div",O,[t("div",G,[t("div",null,[P,f(t("input",{onChange:a[0]||(a[0]=(...o)=>i.setInterest&&i.setInterest(...o)),type:"text","onUpdate:modelValue":a[1]||(a[1]=o=>n.form.interest=o)},null,544),[[v,n.form.interest]]),U])]),t("div",q,[t("div",null,[J,t("div",K,e(s.grandTotal),1)])])])]),t("div",Q,[t("div",R,[t("table",W,[X,t("tbody",null,[(l(!0),c(h,null,w(s.payments.data,(o,_)=>(l(),c("tr",{key:_,class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700"},[t("th",Y,e(o.payment_date),1),t("td",Z,e(o.collected_by),1),t("td",$,e(o.method),1),t("td",tt,e(o.amount),1),et]))),128)),t("tr",st,[ot,at,rt,t("td",lt," \u20A6"+e(),1),ct])])])])])],64)}var ht=g(k,[["render",dt]]);export{ht as default};
