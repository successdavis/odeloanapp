import{o as t,c as u,b as e,e as a,w as o,u as s,L as d,h as n,g as l,i as c,j as b,a as m,r as h,F as p}from"./app.5012b292.js";const f={class:"bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600"},x={class:"container flex max-w-7xl flex-wrap justify-between items-center mx-auto"},y=e("a",{href:"/",class:"flex items-center"},[e("img",{src:"/images/MoneyDirect.webp",class:"mr-3 h-6 sm:h-9",alt:"Flowbite Logo"}),e("span",{class:"self-center text-xl font-semibold whitespace-nowrap dark:text-white"},"STechmax Money Direct")],-1),k={class:"flex md:order-2 gap-2"},v=l("Home"),w=l("Logout"),_=l("Create Account"),$=e("button",{"data-collapse-toggle":"navbar-sticky",type:"button",class:"inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600","aria-controls":"navbar-sticky","aria-expanded":"false"},[e("span",{class:"sr-only"},"Open main menu"),e("svg",{class:"w-6 h-6","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z","clip-rule":"evenodd"})])],-1),N=c('<div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky"><ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"><li><a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a></li><li><a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a></li><li><a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a></li><li><a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a></li></ul></div>',1),B={__name:"GuestNavbar",setup(i){return(r,g)=>(t(),u("nav",f,[e("div",x,[y,e("div",k,[r.$page.props.auth.user?(t(),a(s(d),{key:0,type:"button",href:r.$page.props.auth.user.admin===1?"/dashboard":"/home",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:o(()=>[v]),_:1},8,["href"])):n("",!0),r.$page.props.auth.user?(t(),a(s(d),{key:1,type:"button",href:r.route("logout"),method:"post",as:"button",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:o(()=>[w]),_:1},8,["href"])):n("",!0),r.$page.props.auth.user?n("",!0):(t(),a(s(d),{key:2,href:"/register",type:"button",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"},{default:o(()=>[_]),_:1})),$]),N])]))}},C={class:"max-w-7xl container mx-auto py-12"},M={__name:"Guest",setup(i){return b(!1),(r,g)=>(t(),u(p,null,[m(B),e("div",C,[h(r.$slots,"default")])],64))}};export{M as _};
