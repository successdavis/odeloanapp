import{_ as x,e as y,G as _,o as s,c as a,b as e,v as l,z as u,h as n,t as d,i,a as h,I as p,A as m,B as k,g as v,j as f}from"./app.d38d19a0.js";import"./_baseGetTag.1d57a458.js";import{M as w}from"./MemberSearch.ec52c389.js";const z={components:{MemberSearch:w},data(){return{sponsorsearch:""}},setup(){return{form:y({name:null,email:null,country:"Nigeria",state:null,lga:null,gender:null,title:"Choose a title",mobile:null,business_name:null,dob:null,serial_no:null,r_address:null,p_address:null,working_status:"Working Status",description:null,sponsorid:null})}},methods:{member(c){this.form.sponsorid=c.id}}},M={class:"px-8"},V=e("div",{class:"mb-4"},[e("h1",{class:"text-4xl"},"Add Member")],-1),S=e("div",{class:"mb-3 bg-gray-100 p-2 text-center font-semibold"}," Personal Information ",-1),U={class:"grid md:grid-cols-2 md:gap-6"},O={class:"relative z-0 mt-2 mb-6 w-full group"},q=e("label",{for:"fullname",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Fullname",-1),C={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},N=e("span",{class:"font-medium"},"Oh, snapp!",-1),B={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},P=e("span",{class:"font-medium"},"Oh, snapp!",-1),D={class:"grid md:grid-cols-3 md:gap-6"},A={class:"flex relative z-0 mb-6 w-full group"},E={class:"flex items-center mr-4"},F=e("label",{for:"inline-radio",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"Male",-1),R={class:"flex items-center mr-4"},W=e("label",{for:"inline-2-radio",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"Female",-1),G={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},I=e("span",{class:"font-medium"},"Oh, snapp!",-1),T={class:"relative z-0 mb-6 w-full group"},j=e("label",{for:"title",class:"sr-only"},"title select",-1),L=f('<option selected>Choose a title</option><option value="Mr">Mr.</option><option value="Mrs">Mrs.</option><option value="Miss">Miss.</option><option value="Miss">Ms.</option><option value="Dr">Dr.</option><option value="Prof">Prof.</option><option value="Rev">Rev.</option>',8),H=[L],J={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},K=e("span",{class:"font-medium"},"Oh, snapp!",-1),Q={class:"relative z-0 mb-6 w-full group"},X=e("label",{for:"mobile",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Phone",-1),Y={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},Z=e("span",{class:"font-medium"},"Oh, snapp!",-1),$={class:"grid md:grid-cols-3 md:gap-6"},ee={class:"relative z-0 mb-6 w-full group"},re=e("label",{for:"Country",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Country",-1),oe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},te=e("span",{class:"font-medium"},"Oh, snapp!",-1),se={class:"relative z-0 mb-6 w-full group"},ae=e("label",{for:"state",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"State",-1),le={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ne=e("span",{class:"font-medium"},"Oh, snapp!",-1),de={class:"relative z-0 mb-6 w-full group"},ie=e("label",{for:"lga",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Local Government",-1),ue={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ce=e("span",{class:"font-medium"},"Oh, snapp!",-1),pe={class:"grid md:grid-cols-2 md:gap-6"},me={class:"relative z-0 mb-6 w-full group"},fe=e("label",{for:"email",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Email",-1),be={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},ge=e("span",{class:"font-medium"},"Oh, snapp!",-1),xe={class:"relative z-0 mb-6 w-full group"},ye=e("label",{for:"dob",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Date of Birth",-1),_e={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},he=e("span",{class:"font-medium"},"Oh, snapp!",-1),ke={class:"grid md:grid-cols-2 md:gap-6"},ve={class:"relative z-0 mb-6 w-full group"},we=e("label",{for:"business_name",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Business Name",-1),ze={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},Me=e("span",{class:"font-medium"},"Oh, snapp!",-1),Ve={class:"relative z-0 mb-6 w-full group"},Se=e("label",{for:"working_status",class:"sr-only"},"Working Status",-1),Ue=f('<option disabled selected="">Working Status</option><option value="student">Student</option><option value="employee">Employee</option><option value="civil servant">Civil Servant</option><option value="self employed">Self Employed</option><option value="pensioner">Pensioner</option><option value="unemployed">Unemployed</option>',7),Oe=[Ue],qe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},Ce=e("span",{class:"font-medium"},"Oh, snapp!",-1),Ne={class:"relative z-0 mb-6 w-full group"},Be=e("label",{for:"r_address",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Residential Address",-1),Pe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},De=e("span",{class:"font-medium"},"Oh, snapp!",-1),Ae={class:"relative z-0 mb-6 w-full group"},Ee=e("label",{for:"p_address",class:"peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"},"Permanent Address",-1),Fe={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"},Re=e("span",{class:"font-medium"},"Oh, snapp!",-1),We={type:"submit",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"};function Ge(c,o,Ie,r,Te,b){const g=_("member-search");return s(),a("div",M,[V,S,e("form",{onSubmit:o[14]||(o[14]=v(t=>r.form.post("/members/register"),["prevent"]))},[e("div",U,[e("div",O,[l(e("input",{"onUpdate:modelValue":o[0]||(o[0]=t=>r.form.name=t),type:"text",name:"fullname",id:"fullname",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.name]]),q,r.form.errors.name?(s(),a("p",C,[N,n(" "+d(r.form.errors.name)+".",1)])):i("",!0)]),h(g,{onMember:b.member,url:"/getsponsors",title:"Sponsor"},null,8,["onMember"]),r.form.errors.sponsorid?(s(),a("p",B,[P,n(" "+d(r.form.errors.sponsorid)+".",1)])):i("",!0)]),e("div",D,[e("div",A,[e("div",E,[l(e("input",{"onUpdate:modelValue":o[1]||(o[1]=t=>r.form.gender=t),id:"inline-radio",type:"radio",value:"M",class:"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[p,r.form.gender]]),F]),e("div",R,[l(e("input",{"onUpdate:modelValue":o[2]||(o[2]=t=>r.form.gender=t),id:"inline-2-radio",type:"radio",value:"F",class:"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[p,r.form.gender]]),W]),r.form.errors.gender?(s(),a("p",G,[I,n(" "+d(r.form.errors.gender)+".",1)])):i("",!0)]),e("div",T,[j,l(e("select",{"onUpdate:modelValue":o[3]||(o[3]=t=>r.form.title=t),id:"title",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},H,512),[[m,r.form.title]]),r.form.errors.title?(s(),a("p",J,[K,n(" "+d(r.form.errors.title)+".",1)])):i("",!0)]),e("div",Q,[l(e("input",{"onUpdate:modelValue":o[4]||(o[4]=t=>r.form.mobile=t),type:"text",name:"mobile",id:"mobile",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.mobile]]),X,r.form.errors.mobile?(s(),a("p",Y,[Z,n(" "+d(r.form.errors.mobile)+".",1)])):i("",!0)])]),e("div",$,[e("div",ee,[l(e("input",{"onUpdate:modelValue":o[5]||(o[5]=t=>r.form.country=t),type:"text",name:"Country",id:"Country",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.country]]),re,r.form.errors.country?(s(),a("p",oe,[te,n(" "+d(r.form.errors.country)+".",1)])):i("",!0)]),e("div",se,[l(e("input",{"onUpdate:modelValue":o[6]||(o[6]=t=>r.form.state=t),type:"text",name:"state",id:"state",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.state]]),ae,r.form.errors.state?(s(),a("p",le,[ne,n(" "+d(r.form.errors.state)+".",1)])):i("",!0)]),e("div",de,[l(e("input",{"onUpdate:modelValue":o[7]||(o[7]=t=>r.form.lga=t),type:"text",name:"lga",id:"lga",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.lga]]),ie,r.form.errors.lga?(s(),a("p",ue,[ce,n(" "+d(r.form.errors.lga)+".",1)])):i("",!0)])]),e("div",pe,[e("div",me,[l(e("input",{"onUpdate:modelValue":o[8]||(o[8]=t=>r.form.email=t),type:"email",name:"email",id:"email",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.email]]),fe,r.form.errors.email?(s(),a("p",be,[ge,n(" "+d(r.form.errors.email)+".",1)])):i("",!0)]),e("div",xe,[l(e("input",{"onUpdate:modelValue":o[9]||(o[9]=t=>r.form.dob=t),type:"date",name:"dob",id:"dob",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.dob]]),ye,r.form.errors.dob?(s(),a("p",_e,[he,n(" "+d(r.form.errors.dob)+".",1)])):i("",!0)])]),e("div",ke,[e("div",ve,[l(e("input",{"onUpdate:modelValue":o[10]||(o[10]=t=>r.form.business_name=t),type:"text",name:"business_name",id:"business_name",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.business_name]]),we,r.form.errors.business_name?(s(),a("p",ze,[Me,n(" "+d(r.form.errors.business_name)+".",1)])):i("",!0)]),e("div",Ve,[Se,l(e("select",{"onUpdate:modelValue":o[11]||(o[11]=t=>r.form.working_status=t),id:"working_status",class:"block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"},Oe,512),[[m,r.form.working_status]]),r.form.errors.working_status?(s(),a("p",qe,[Ce,n(" "+d(r.form.errors.working_status)+".",1)])):i("",!0)])]),e("div",Ne,[l(e("input",{"onUpdate:modelValue":o[12]||(o[12]=t=>r.form.r_address=t),type:"text",name:"r_address",id:"r_address",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.r_address]]),Be,r.form.errors.r_address?(s(),a("p",Pe,[De,n(" "+d(r.form.errors.r_address)+".",1)])):i("",!0)]),e("div",Ae,[l(e("input",{"onUpdate:modelValue":o[13]||(o[13]=t=>r.form.p_address=t),type:"text",name:"p_address",id:"p_address",class:"block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer",placeholder:" ",required:""},null,512),[[u,r.form.p_address]]),Ee,r.form.errors.p_address?(s(),a("p",Fe,[Re,n(" "+d(r.form.errors.p_address)+".",1)])):i("",!0)]),l(e("button",We,"Submit",512),[[k,!r.form.processing]])],32)])}var Je=x(z,[["render",Ge]]);export{Je as default};
