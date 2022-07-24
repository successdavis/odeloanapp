import{_ as f,o,c as r,r as k,q as h,h as d,E as m,b as t,F as x,m as y,t as s,a as _,p as w,d as C,L as A,w as p,s as L,v as j,f as M,I as S,n as B}from"./app.38cd2be3.js";import{A as N,h as z}from"./AvatarForm.262d58f0.js";const V={props:{name:{required:!0},selected:{default:!1}},data(){return{isActive:!1}},computed:{href(){return"#"+this.name.toLowerCase().replace(/ /g,"_")}},mounted(){this.isActive=this.selected}},D=d(" fefef "),I=d("sfefa");function O(l,n,e,v,i,g){return o(),r("div",null,[D,i.isActive?k(l.$slots,"default",{key:0},()=>[I]):h("",!0)])}var T=f(V,[["render",O]]);const E={props:{vertical:{default:!1}},data(){return{tabs:[]}},created(){console.log(this.$refs.child)},methods:{selectTab(l){this.tabs.forEach(n=>{n.isActive=n.name==l.name})}}},G=l=>(w("data-v-1d7656c6"),l=l(),C(),l),H={class:"border-b border-gray-200 dark:border-gray-700 w-full"},P={class:"flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"},R={class:"mr-2"},F=["href","onClick","textContent"],q=G(()=>t("div",null,null,-1));function U(l,n,e,v,i,g){const b=m("tab");return o(),r(x,null,[t("div",H,[t("ul",P,[(o(!0),r(x,null,y(i.tabs,c=>(o(),r("li",R,[t("a",{href:c.href,onClick:a=>g.selectTab(c),textContent:s(c.name),class:"inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"},null,8,F)]))),256))])]),_(b,{ref:"tab"},null,512),q],64)}var W=f(E,[["render",U],["__scopeId","data-v-1d7656c6"]]);const J={components:{AvatarForm:N,Tab:T,Tabs:W,Link:A},props:{loan:Object,member:Object,payments:Object,guarantors:Object,nextpayment:String},data(){return{showguarantors:!1}},methods:{dateTime(l){return z(l).fromNow()},loanStatus(){return this.loan.data.status===0?"New Loan Application":this.loan.data.status===1?"Approved":this.loan.data.status===2?"Completed":"Rejected"}}},K={class:"text-center bg-blue-200 py-6 mb-0 font-semibold text-xl"},Q=d("View Loan Details - "),X={class:"text-blue-600"},Y={href:"#",class:"flex flex-col items-center bg-white border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"},Z={class:"flex flex-col justify-between p-4 leading-normal"},$={class:"mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"},tt={class:"grid w-full md:grid-cols-3 md:gap-6"},et={class:"w-full"},st={class:"grid grid-cols-2 gap-6"},at=t("div",{class:"font-semibold"},"Gender:",-1),ot={class:"grid grid-cols-2 gap-6"},rt=t("div",{class:"font-semibold"},"Address:",-1),lt={class:"w-full"},dt={class:"grid grid-cols-2 gap-6"},ct=t("div",{class:"font-semibold"},"Phone Number:",-1),nt={class:"grid grid-cols-2 gap-6"},it=t("div",{class:"font-semibold"},"Email:",-1),ht={class:"grid grid-cols-2 gap-6"},ut=t("div",{class:"font-semibold"},"Status:",-1),_t={key:0},xt=d("Approve Loan Application"),gt=d("Reject Loan Application"),pt={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},bt=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-2"}," Released "),t("th",{scope:"col",class:"py-3 px-2"}," Maturity "),t("th",{scope:"col",class:"py-3 px-2"}," Principal Amount "),t("th",{scope:"col",class:"py-3 px-2"}," Duration "),t("th",{scope:"col",class:"py-3 px-2"}," Interest % "),t("th",{scope:"col",class:"py-3 px-2"}," Interest "),t("th",{scope:"col",class:"py-3 px-2"}," Due "),t("th",{scope:"col",class:"py-3 px-2"}," Paid "),t("th",{scope:"col",class:"py-3 px-2"}," Balance ")])],-1),mt={class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"},yt={class:"text-sm py-4 px-2"},ft={class:"text-sm py-4 px-2"},vt={class:"text-sm py-4 px-2"},kt={class:"text-xs py-4 px-2"},wt={class:"flex items-center"},Ct={class:"py-4 px-2"},At={class:"flex items-center"},Lt={class:"py-4 px-2"},jt={class:"flex items-center"},Mt={class:"py-4 px-2"},St={class:"flex items-center"},Bt={class:"py-4 px-2"},Nt={class:"flex items-center"},zt={class:"py-4 px-2"},Vt={class:"flex items-center"},Dt={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},It=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-2"}," Next Payment ")])],-1),Ot={key:0,class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"},Tt={class:"py-4 px-2"},Et={class:"flex items-center"},Gt={class:"text-center bg-blue-200 py-2 mb-0 font-semibold text-xl flex justify-center"},Ht=t("span",null,"Guarantors ",-1),Pt={class:"flex items-center mb-4"},Rt=t("label",{for:"default-checkbox",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"Show Guardians",-1),Ft={key:1},qt=d("Add Guarantor"),Ut={class:"overflow-x-auto relative shadow-md sm:rounded-lg"},Wt={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},Jt=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-6"}," Name "),t("th",{scope:"col",class:"py-3 px-6"}," Address "),t("th",{scope:"col",class:"py-3 px-6"}," Mobile "),t("th",{scope:"col",class:"py-3 px-6"}," Gender "),t("th",{scope:"col",class:"py-3 px-6"}," Occupation "),t("th",{scope:"col",class:"py-3 px-6"}," Working Address "),t("th",{scope:"col",class:"py-3 px-6"}," Action ")])],-1),Kt={scope:"row",class:"py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"},Qt={class:"py-4 px-6"},Xt={class:"py-4 px-6"},Yt={class:"py-4 px-6"},Zt={class:"py-4 px-6"},$t={class:"py-4 px-6"},te=t("td",{class:"py-4 px-6"},[t("a",{href:"#",class:"font-medium text-blue-600 dark:text-blue-500 hover:underline"},"Edit")],-1),ee=S('<div class="border-b border-gray-200 dark:border-gray-700 w-full"><ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"><li class="mr-2"><a href="#" class="border-blue-600 active inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"><svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Repayment </a></li></ul></div>',1),se=d("Add Repayment"),ae={class:"overflow-x-auto relative shadow-md sm:rounded-lg"},oe={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},re=t("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[t("tr",null,[t("th",{scope:"col",class:"py-3 px-6"}," Payment Date "),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[d(" Collected By "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[d(" Method "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("div",{class:"flex items-center"},[d(" Amount "),t("a",{href:"#"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[t("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),t("th",{scope:"col",class:"py-3 px-6"},[t("span",{class:"sr-only"},"Delete")])])],-1),le={scope:"row",class:"py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"},de={class:"py-4 px-6"},ce={class:"py-4 px-6"},ne={class:"py-4 px-6"},ie={class:"py-4 px-6 text-right"},he={key:0},ue={class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700"},_e=t("th",{scope:"row",class:"py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"},null,-1),xe=t("td",{class:"py-4 px-6"},null,-1),ge=t("td",{class:"py-4 px-6"},null,-1),pe={class:"py-4 px-6 font-bold"},be=t("td",{class:"py-4 px-6 text-right"},[t("a",{href:"#",class:"font-medium text-blue-600 dark:text-blue-500 hover:underline"},"Edit")],-1);function me(l,n,e,v,i,g){const b=m("avatar-form"),c=m("Link");return o(),r(x,null,[t("div",K,[Q,t("span",X,s(g.loanStatus()),1)]),t("a",Y,[_(b,{member:e.member},null,8,["member"]),t("div",Z,[t("h5",$,s(e.member.title+" "+e.member.name)+"}",1),t("div",tt,[t("div",et,[t("div",st,[at,t("div",null,s(e.member.gender),1)]),t("div",ot,[rt,t("div",null,s(e.member.r_address),1)])]),t("div",lt,[t("div",dt,[ct,t("div",null,s(e.member.mobile),1)]),t("div",nt,[it,t("div",null,s(e.member.email),1)]),t("div",ht,[ut,t("div",null,s(e.member.working_status),1)])])])])]),e.loan.data.status===0?(o(),r("div",_t,[_(c,{href:"/loan/"+e.loan.data.id+"/approve-loan",type:"button",class:"mt-3 text-white bg-slate-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:p(()=>[xt]),_:1},8,["href"]),_(c,{href:"/loan/"+e.loan.data.id+"/reject-loan",type:"button",class:"mt-3 text-white bg-red-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:p(()=>[gt]),_:1},8,["href"])])):h("",!0),t("table",pt,[bt,t("tbody",null,[t("tr",mt,[t("td",yt,s(e.loan.data.release),1),t("td",ft,s(e.loan.data.maturity),1),t("td",vt," \u20A6"+s(e.loan.data.principal_amount),1),t("td",kt,[t("div",wt,s(e.loan.data.duration),1)]),t("td",Ct,[t("div",At,s(e.loan.data.loan_interest),1)]),t("td",Lt,[t("div",jt," \u20A6"+s(e.loan.data.interest_maturity),1)]),t("td",Mt,[t("div",St," \u20A6"+s(e.loan.data.due),1)]),t("td",Bt,[t("div",Nt," \u20A6"+s(e.loan.data.paid),1)]),t("td",zt,[t("div",Vt," \u20A6"+s(e.loan.data.balance),1)])])])]),t("table",Dt,[It,t("tbody",null,[e.loan.data.loancategory_id===2?(o(),r("tr",Ot,[t("td",Tt,[t("div",Et," Min of: \u20A6"+s(e.nextpayment),1)])])):h("",!0)])]),t("div",Gt,[Ht,t("div",Pt,[L(t("input",{"onUpdate:modelValue":n[0]||(n[0]=a=>i.showguarantors=a),id:"default-checkbox",type:"checkbox",value:"",class:"w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[j,i.showguarantors]]),Rt])]),i.showguarantors?(o(),r("div",Ft,[_(c,{href:"/guarantor/"+e.loan.data.id+"/add",type:"button",class:"mt-3 text-white bg-slate-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:p(()=>[qt]),_:1},8,["href"]),t("div",Ut,[t("table",Wt,[Jt,t("tbody",null,[(o(!0),r(x,null,y(e.guarantors,(a,u)=>(o(),r("tr",{key:u,class:"bg-white border-b dark:bg-gray-900 dark:border-gray-700"},[t("th",Kt,s(a.name),1),t("td",Qt,s(a.address),1),t("td",Xt,s(a.mobile),1),t("td",Yt,s(a.gender),1),t("td",Zt,s(a.occupation),1),t("td",$t,s(a.working_address),1),te]))),128))])])])])):h("",!0),ee,t("div",null,[e.loan.data.status===1?(o(),M(c,{key:0,href:"/repayment/"+e.loan.data.id,type:"button",class:"mt-3 text-white bg-slate-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:p(()=>[se]),_:1},8,["href"])):h("",!0),t("div",ae,[t("table",oe,[re,t("tbody",null,[(o(!0),r(x,null,y(e.payments.data,(a,u)=>(o(),r("tr",{class:B([u===Object.keys(e.payments.data).length-1?"bg-cyan-400 ":"","bg-white border-b dark:bg-gray-800 dark:border-gray-700"]),key:u},[t("th",le,s(a.payment_date),1),t("td",de,s(a.collected_by),1),t("td",ce,s(a.method),1),t("td",ne,s(a.amount),1),t("td",ie,[u===Object.keys(e.payments.data).length-1?(o(),r("div",he," upfront")):h("",!0)])],2))),128)),t("tr",ue,[_e,xe,ge,t("td",pe," \u20A6"+s(e.loan.data.paid),1),be])])])])])],64)}var ve=f(J,[["render",me]]);export{ve as default};
