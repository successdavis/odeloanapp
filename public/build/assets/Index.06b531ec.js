import{k as b,C as f,o as d,c as n,b as e,v as p,z as y,u as l,y as _,F as m,s as v,t as a,a as i,w as c,L as h,h as s,D as w}from"./app.d38d19a0.js";import{t as k}from"./throttle.9a3c3afe.js";import"./_baseGetTag.1d57a458.js";const C={class:"overflow-x-auto px-4 relative shadow-md sm:rounded-lg"},M={class:"flex justify-between items-center py-4 bg-white dark:bg-gray-800"},z=e("label",{for:"table-search",class:"sr-only"},"Search",-1),B={class:"relative"},L=e("div",{class:"flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"},[e("svg",{class:"w-5 h-5 text-gray-500 dark:text-gray-400","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z","clip-rule":"evenodd"})])],-1),S={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},H=e("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[e("tr",null,[e("th",{scope:"col",class:"py-3 px-6"},[e("div",{class:"flex items-center"},[s(" Purpose "),e("a",{href:"#"},[e("svg",{xmlns:"http://www.w3.org/2000/svg",class:"ml-1 w-3 h-3","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 320 512"},[e("path",{d:"M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"})])])])]),e("th",{scope:"col",class:"py-3 px-6"}," Amount "),e("th",{scope:"col",class:"py-3 px-6"}," Status "),e("th",{scope:"col",class:"py-3 px-6"}," Action ")])],-1),N={scope:"row",class:"flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"},V={class:"pl-3"},j={class:"text-base font-semibold"},A={class:"py-4 px-6"},D={class:"py-4 px-6"},P={class:"flex items-center"},T=e("div",{class:"h-2.5 w-2.5 rounded-full bg-green-400 mr-2"},null,-1),F={class:"py-4 px-6"},I=s("Pay"),E={class:"flex justify-between items-center py-4","aria-label":"Table navigation"},O={class:"text-sm font-normal text-gray-500"},R=s("Showing "),U={class:"font-semibold text-gray-900"},q=s(" of "),G={class:"font-semibold text-gray-900"},J={class:"inline-flex mt-2 xs:mt-0"},K=e("svg",{"aria-hidden":"true",class:"mr-2 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z","clip-rule":"evenodd"})],-1),Q=s(" Prev "),W=s(" Next "),X=e("svg",{"aria-hidden":"true",class:"ml-2 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),ee={__name:"Index",props:{fines:Object},setup(r){let o=b("");return f(o,k(function(g){w.Inertia.get("/fines",{search:g},{preserveState:!0})},500)),(g,u)=>(d(),n("div",C,[e("div",M,[z,e("div",B,[L,p(e("input",{"onUpdate:modelValue":u[0]||(u[0]=t=>_(o)?o.value=t:o=t),type:"text",id:"table-search-users",class:"block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",placeholder:"Search for Members"},null,512),[[y,l(o)]])])]),e("table",S,[H,e("tbody",null,[(d(!0),n(m,null,v(r.fines.data,(t,x)=>(d(),n("tr",{key:x,class:"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"},[e("th",N,[e("div",V,[e("div",j,a(t.name),1)])]),e("td",A,a(t.amount),1),e("td",D,[e("div",P,[T,s(" "+a(t.status?"paid":"not paid"),1)])]),e("td",F,[i(l(h),{href:"/fine/"+t.id+"/pay",type:"button",as:"button",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"},{default:c(()=>[I]),_:2},1032,["href"])])]))),128))])]),e("nav",E,[e("span",O,[R,e("span",U,a(r.fines.from)+"-"+a(r.fines.to),1),q,e("span",G,a(r.fines.total),1)]),e("div",J,[i(l(h),{href:r.fines.prev_page_url,class:"inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"},{default:c(()=>[K,Q]),_:1},8,["href"]),i(l(h),{href:r.fines.next_page_url,class:"inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-r border-0 border-l border-gray-700 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"},{default:c(()=>[W,X]),_:1},8,["href"])])])]))}};export{ee as default};
