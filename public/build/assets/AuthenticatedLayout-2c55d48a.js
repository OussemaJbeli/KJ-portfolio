import{f as B,g as D,h as $,m as N,o as n,c as _,b as s,r as y,j as w,v as M,a as t,w as a,n as m,T as Z,i as v,u as d,x as o,y as b,d as C,k as c,z as i,A as z,t as V,B as q}from"./app-b6b89d07.js";import{_ as P}from"./_plugin-vue_export-helper-c27b6911.js";const O={class:"relative"},R={__name:"Dropdown",props:{align:{type:String,default:"right"},width:{type:String,default:"48"},contentClasses:{type:String,default:"py-1 bg-white"}},setup(u){const f=u,e=g=>{p.value&&g.key==="Escape"&&(p.value=!1)};B(()=>document.addEventListener("keydown",e)),D(()=>document.removeEventListener("keydown",e));const l=$(()=>({48:"w-48"})[f.width.toString()]),r=$(()=>f.align==="left"?"origin-top-left left-0":f.align==="right"?"origin-top-right right-0":"origin-top"),p=N(!1);return(g,k)=>(n(),_("div",O,[s("div",{onClick:k[0]||(k[0]=L=>p.value=!p.value)},[y(g.$slots,"trigger")]),w(s("div",{class:"fixed inset-0 z-40",onClick:k[1]||(k[1]=L=>p.value=!1)},null,512),[[M,p.value]]),t(Z,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:a(()=>[w(s("div",{class:m(["absolute z-50 mt-2 rounded-md shadow-lg",[l.value,r.value]]),style:{display:"none"},onClick:k[2]||(k[2]=L=>p.value=!1)},[s("div",{class:m(["rounded-md ring-1 ring-black ring-opacity-5 border_correct",u.contentClasses])},[y(g.$slots,"content")],2)],2),[[M,p.value]])]),_:3})]))}},S={__name:"DropdownLink",props:{href:{type:String,required:!0}},setup(u){return(f,e)=>(n(),v(d(o),{href:u.href,class:"block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"},{default:a(()=>[y(f.$slots,"default")]),_:3},8,["href"]))}},h={__name:"NavLink",props:{href:{type:String,required:!0},active:{type:Boolean}},setup(u){const f=u,e=$(()=>f.active?"link_active":"link_inactive");return(l,r)=>(n(),v(d(o),{href:u.href,class:m(e.value)},{default:a(()=>[y(l.$slots,"default")]),_:3},8,["href","class"]))}},I={props:{isChecked:Boolean,label:String,active_value:String,inactive_value:String},computed:{inputId(){return`toggle-${Math.random().toString(36).substr(2,10)}`}},methods:{toggleHandle(){this.$emit("toggle")}}},T={class:"w-full p-0 m-0 flex"},A=["for"],F={class:"form-input flex items-center p-0 m-0 flex flex-row w-56 bg-transparent border-transparent"},H=["id","checked"],U=["for"],Q={class:"relative"},G={class:"ml-3 text-white",id:"first_div"},J={key:0},K={key:1};function W(u,f,e,l,r,p){return n(),_("div",T,[s("label",{for:p.inputId,class:"form-label"},b(e.label),9,A),s("div",F,[s("input",{id:p.inputId,type:"checkbox",class:"hidden",checked:e.isChecked,onChange:f[0]||(f[0]=(...g)=>p.toggleHandle&&p.toggleHandle(...g))},null,40,H),s("label",{for:p.inputId,class:"flex items-center flex-row bg-transparent cursor-pointer"},[s("div",Q,[s("div",{id:"second_div",class:m(["block w-10 h-6 rounded-full",{"bg-gray-400":!e.isChecked,"bg-green-500":e.isChecked}])},null,2),s("div",{class:m(["absolute left-1 top-1 w-4 h-4 bg-white rounded-full transform transition",{"translate-x-4":e.isChecked}])},null,2)]),C("     "),s("div",G,[e.isChecked?(n(),_("span",J,b(e.active_value),1)):(n(),_("span",K,b(e.inactive_value),1))])],8,U)])])}const X=P(I,[["render",W]]),E={__name:"ResponsiveNavLink",props:{href:{type:String,required:!0},active:{type:Boolean}},setup(u){const f=u,e=$(()=>f.active?"block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out":"block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out");return(l,r)=>(n(),v(d(o),{href:u.href,class:m(e.value)},{default:a(()=>[y(l.$slots,"default")]),_:3},8,["href","class"]))}},Y={data(){return{show:!0}},watch:{"$page.props.flash":{handler(){this.show=!0},deep:!0}}},x={key:0,class:"fixed z-999 flex items-center justify-between max-w-xl bg-green-500 rounded"},ee={class:"flex items-center pr-56"},se=s("svg",{class:"flex-shrink-0 ml-4 mr-2 w-4 h-4 fill-white",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20"},[s("polygon",{points:"0 11 2 9 7 14 18 3 20 5 7 18"})],-1),ie={class:"py-4 text-white text-sm font-medium"},te=s("svg",{class:"block w-2 h-2 fill-green-800 group-hover:fill-white",xmlns:"http://www.w3.org/2000/svg",width:"235.908",height:"235.908",viewBox:"278.046 126.846 235.908 235.908"},[s("path",{d:"M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"})],-1),le=[te];function ae(u,f,e,l,r,p){return n(),_("div",null,[u.$page.props.flash.success&&r.show?(n(),_("div",x,[s("div",ee,[se,s("div",ie,b(u.$page.props.flash.success),1)]),s("button",{type:"button",class:"group mr-2 p-2",onClick:f[0]||(f[0]=g=>r.show=!1)},le)])):c("",!0)])}const j=P(Y,[["render",ae]]),re={xmlns:"http://www.w3.org/2000/svg",style:{display:"none"}},oe=s("symbol",{id:"check-circle-fill",fill:"currentColor",viewBox:"0 0 16 16"},[s("path",{d:"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"})],-1),de=[oe],ne={key:0,class:"alert alert-success d-flex align-items-center",role:"alert"},ue=s("svg",{class:"bi flex-shrink-0 me-2",width:"24",height:"24",role:"img","aria-label":"Success:"},[s("use",{"xlink:href":"#check-circle-fill"})],-1),fe={class:"min-h-screen bg-gray-100 main_frame"},he=s("div",{class:"back_block_transparent"},null,-1),pe=["src"],_e={class:"flex justify-between h-16 nave_liste"},ce={class:"flex nave_options"},me=s("i",{class:"fa-solid fa-x"},null,-1),ge=[me],ve={class:"Logo_app"},be={class:"options_nave"},ye={key:0,class:"dark_sidbar"},ke={class:"between_links"},Ce={class:"list_nav_link"},$e={class:"wrapper"},we=s("input",{class:"hidden-trigger",id:"toogle",type:"checkbox"},null,-1),Ee=s("i",{class:"fa-solid fa-pen-to-square"},null,-1),Le=[Ee],Me={class:"subs"},Se=s("input",{class:"hidden-sub-trigger",id:"sub1",type:"radio",name:"sub-circle",value:"1"},null,-1),Ne=s("label",{for:"sub1"},[s("i",{class:"fa-solid fa-plus"}),s("span",null,"add Tool")],-1),Pe=s("input",{class:"hidden-sub-trigger",id:"sub2",type:"radio",name:"sub-circle",value:"1"},null,-1),je=s("label",{for:"sub2"},[s("i",{class:"fa-solid fa-folder-plus"}),s("span",null,"add categorie")],-1),Be={class:"sub-circle"},De=s("label",{for:"sub3"},[s("i",{class:"fa-solid fa-circle-plus"}),s("span",null,"create categorie")],-1),Ze={class:"list_nav_link"},ze={class:"between_links"},Ve={key:1,class:"between_links"},qe={class:"pt-2 pb-3 space-y-1"},Oe={class:"pt-4 pb-1 border-t border-gray-200"},Re={class:"px-4"},Ie={class:"font-medium text-base text-gray-800"},Te={class:"font-medium text-sm text-gray-500"},Ae={class:"mt-3 space-y-1"},Fe={key:0,class:"bg-white shadow header"},He={class:"mx-auto title_session"},Ue={class:"side_but_secsion"},Qe={class:"theme-switch"},Ge=s("div",{class:"theme-switch__container"},[s("div",{class:"theme-switch__clouds"}),s("div",{class:"theme-switch__stars-container"},[s("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 144 55",fill:"none"},[s("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z",fill:"currentColor"})])]),s("div",{class:"theme-switch__circle-container"},[s("div",{class:"theme-switch__sun-moon-container"},[s("div",{class:"theme-switch__moon"},[s("div",{class:"theme-switch__spot"}),s("div",{class:"theme-switch__spot"}),s("div",{class:"theme-switch__spot"})])])])],-1),Je={class:"ml-3 relative"},Ke={class:"inline-flex rounded-md"},We={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"},Xe=["src"],Ye=s("i",{class:"fa-solid fa-gear",style:{color:"#ffffff"}},null,-1),xe=[Ye],es={key:0,class:"theme_edite_frame"},ss={class:"sid_img"},is=s("p",null,"images",-1),ts={class:"img_list list"},ls={class:"filters"},as=s("p",null,"filters",-1),rs={class:"filter_list list"},os={key:1,class:"add_tikets_frame"},ds={class:"fram_tikets"},ns={class:"header"},us=s("div",{class:"logo"},[s("i",{class:"fa-solid fa-cart-plus"})],-1),fs=s("i",{class:"fa-sharp fa-solid fa-circle-xmark"},null,-1),hs=[fs],ps={class:"body_fram"},_s={class:"inputs"},cs=["error"],ms={class:"save"},gs=["disabled"],vs={components:{Link:o,FlashMessages:j,ToggleCheckbox:X},props:{},data(){return{search_run:!1,searchQuery:"",sid_bar:!0,test_side:!1,openEdite_frame:!1,sid_bar_second:!1,img1:"img_1.jpg",img2:"img_2.jpg",img3:"img_3.jpg",img4:"img_4.jpg",img5:"img_5.jpg",img6:"img_6.jpg",img7:"img_7.jpg",img8:"img_8.jpg",img9:"img_9.jpg",color1:"ffc502",color2:"ff5602",color3:"8b1bd2",color4:"02bf09",color5:"02ff1b",color6:"02e1ff",color7:"020aff",darckMode:!1,list1:!1,list2:!1,edite_favorit:!1,openCategorie_frame:!1,Categorie_form:this.$inertia.form({name:null})}},methods:{open_list1(){this.list1?this.list1=!1:this.list1=!0},open_list2(){this.list2?this.list2=!1:this.list2=!0},isRequired(u){return this.requiredValue===u},openEdite(){this.openEdite_frame?this.openEdite_frame=!1:this.openEdite_frame=!0},min_sid_bar(){this.sid_bar?(this.sid_bar=!1,this.test_side=!1):(this.sid_bar=!0,this.test_side=!0)},edite_favorit_fun(){this.edite_favorit?this.edite_favorit=!1:this.edite_favorit=!0},min_sid_bar_second(){this.sid_bar_second?(this.sid_bar_second=!1,this.sid_bar=!0,this.test_side=!1):(this.sid_bar_second=!0,this.sid_bar=!0,this.test_side=!1)},openCategorie(){this.openCategorie_frame?this.openCategorie_frame=!1:this.openCategorie_frame=!0},save_Categorie(){this.Categorie_form.post("/AI_tool_Categorie")},hover_side_bar(){this.sid_bar?this.test_side=!0:this.test_side=!0},out_side_bar(){this.sid_bar?this.test_side=!0:this.test_side=!1},updateRootCSSVariable(u){document.documentElement.style.setProperty("--action_color",this.$page.props.auth.user.filter)},updateRootCSSMODE(){this.$page.props.auth.user.darkMode?(document.documentElement.style.setProperty("--bg1","var(--bg1-dark)"),document.documentElement.style.setProperty("--bg2","var(--bg2-dark)"),document.documentElement.style.setProperty("--title1","var(--title1-dark)"),document.documentElement.style.setProperty("--title2","var(--title2-dark)"),document.documentElement.style.setProperty("--title3","var(--title3-dark)"),document.documentElement.style.setProperty("--hover_sid","var(--hover_sid-dark)"),document.documentElement.style.setProperty("--sid_filter","var(--sid_filter-dark)"),document.documentElement.style.setProperty("--opacity","var(--opacity-dark)"),this.darckMode=!0):(document.documentElement.style.setProperty("--bg1","var(--bg1-light)"),document.documentElement.style.setProperty("--bg2","var(--bg2-light)"),document.documentElement.style.setProperty("--title1","var(--title1-light)"),document.documentElement.style.setProperty("--title2","var(--title2-light)"),document.documentElement.style.setProperty("--title3","var(--title3-light)"),document.documentElement.style.setProperty("--hover_sid","var(--hover_sid-light)"),document.documentElement.style.setProperty("--sid_filter","var(--sid_filter-light)"),document.documentElement.style.setProperty("--opacity","var(--opacity-light)"),this.darckMode=!1)},save_items(){this.ticket_form.post(`/Items/${this.$page.props.auth.user.id}`)}},mounted(){const u=this.color;this.updateRootCSSVariable(u),this.updateRootCSSMODE()},computed:{}},ks=Object.assign(vs,{__name:"AuthenticatedLayout",setup(u){const f=N(!1);return(e,l)=>(n(),_("div",null,[(n(),_("svg",re,de)),e.successMessage?(n(),_("div",ne,[ue,s("div",null,b(e.successMessage),1)])):c("",!0),s("div",fe,[s("nav",{class:"bg-white border-b border-gray-100 side_barre",style:i({width:e.sid_bar||e.test_side?"":"70px",left:e.sid_bar_second?"0":""}),onMouseover:l[5]||(l[5]=(...r)=>e.hover_side_bar&&e.hover_side_bar(...r)),onMouseout:l[6]||(l[6]=(...r)=>e.out_side_bar&&e.out_side_bar(...r))},[he,s("div",{class:"side_color_picture",id:"side_color_picture",style:i({width:e.sid_bar||e.test_side?"":"250px"})},[s("img",{src:"/"+e.$page.props.auth.user.sid_img},null,8,pe)],4),s("div",_e,[s("div",ce,[s("div",{class:"close_sid_bar",onClick:l[0]||(l[0]=(...r)=>e.min_sid_bar_second&&e.min_sid_bar_second(...r))},ge),s("div",ve,[t(d(o),{href:e.route("dashboard")},{default:a(()=>[s("span",{class:"app_logo",style:i({height:e.sid_bar||e.test_side?"":"60px",width:e.sid_bar||e.test_side?"":"60px"})},"ai",4),s("span",{class:"app_name_logo",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"-toolbox",4)]),_:1},8,["href"])]),s("div",be,[e.edite_favorit?(n(),_("div",ye)):c("",!0),s("div",ke,[s("p",{class:"title",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"ai-panel",4),s("div",{class:"line",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},null,4)]),t(h,{href:e.route("dashboard"),active:e.route().current("dashboard"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-chart-line",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"Dashboard",4)]),_:1},8,["href","active"]),t(h,{href:e.route("ai_tools_list"),active:e.route().current("ai_tools_list"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-solid fa-star",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"ai-tools",4)]),_:1},8,["href","active"]),s("div",Ce,[s("div",{class:"list_header",onClick:l[3]||(l[3]=r=>e.open_list1())},[s("i",{class:"fa-solid fa-screwdriver-wrench list_icon",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"for you",4),s("div",$e,[we,s("label",{class:"circle",for:"toogle",onClick:l[1]||(l[1]=r=>e.edite_favorit_fun())},Le),s("div",Me,[t(d(o),{class:"sub-circle",href:e.route("edite_tools")},{default:a(()=>[Se,Ne]),_:1},8,["href"]),t(d(o),{class:"sub-circle",href:e.route("edite_tools")},{default:a(()=>[Pe,je]),_:1},8,["href"]),s("button",Be,[s("input",{onClick:l[2]||(l[2]=r=>e.openCategorie()),class:"hidden-sub-trigger",id:"sub3",type:"radio",name:"sub-circle",value:"1"}),De])])]),s("i",{class:"fa-solid fa-chevron-right list_arrow",style:i({visibility:e.sid_bar||e.test_side?"":"hidden",transform:e.list1?"rotateZ(90deg)":""})},null,4)]),s("div",{class:"list_links",style:i({display:e.sid_bar||e.test_side?"":"none",height:e.list1?"":"0px",visibility:e.list1?"visible":"hidden"})},[t(h,{href:e.route("ai_tools1"),active:e.route().current("ai_tools1"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-solid fa-folder-open",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 1",4)]),_:1},8,["href","active"]),t(h,{href:e.route("ai_tools2"),active:e.route().current("ai_tools2"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-regular fa-circle",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 2",4)]),_:1},8,["href","active"]),t(h,{href:e.route("ai_tools3"),active:e.route().current("ai_tools3"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-regular fa-circle",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 3",4)]),_:1},8,["href","active"])],4)]),s("div",Ze,[s("div",{class:"list_header",onClick:l[4]||(l[4]=r=>e.open_list2())},[s("i",{class:"fa-solid fa-rotate-right list_icon",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"Recent",4),s("i",{class:"fa-solid fa-chevron-right list_arrow",style:i({visibility:e.sid_bar||e.test_side?"":"hidden",transform:e.list2?"rotateZ(90deg)":""})},null,4)]),s("div",{class:"list_links",style:i({display:e.sid_bar||e.test_side?"":"none",height:e.list2?"":"0px",visibility:e.list2?"visible":"hidden"})},[t(h,{href:e.route("ai_tools1"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-regular fa-circle",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 2",4)]),_:1},8,["href"]),t(h,{href:e.route("ai_tools2"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-regular fa-circle",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 3",4)]),_:1},8,["href"]),t(h,{href:e.route("ai_tools3"),class:"NavLink sub_link"},{default:a(()=>[s("i",{class:"fa-regular fa-circle",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"tool 1",4)]),_:1},8,["href"])],4)]),s("div",ze,[s("p",{class:"title",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"account",4),s("div",{class:"line",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},null,4)]),t(h,{href:e.route("profile.edit"),active:e.route().current("profile.edit"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-user",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"my account",4)]),_:1},8,["href","active"]),t(h,{href:e.route("Subscription"),active:e.route().current("Subscription"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-credit-card",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"subscription",4)]),_:1},8,["href","active"]),t(h,{href:e.route("team_member"),active:e.route().current("team_member"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-users",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"team member",4)]),_:1},8,["href","active"]),t(h,{href:e.route("logout"),method:"post",active:e.route().current("logout"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-arrow-right-from-bracket",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"logout",4)]),_:1},8,["href","active"]),e.$page.props.auth.user.admin?(n(),_("div",Ve,[s("p",{class:"title",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"admin panel",4),s("div",{class:"line",style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},null,4)])):c("",!0),e.$page.props.auth.user.admin?(n(),v(h,{key:2,href:e.route("Dashboard_admin"),active:e.route().current("Dashboard_admin"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-chart-line",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"Dashboard",4)]),_:1},8,["href","active"])):c("",!0),e.$page.props.auth.user.admin?(n(),v(h,{key:3,href:e.route("user_manegement_admin"),active:e.route().current("user_manegement_admin"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-users",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"user manegement",4)]),_:1},8,["href","active"])):c("",!0),e.$page.props.auth.user.admin?(n(),v(h,{key:4,href:e.route("general_setting_admin"),active:e.route().current("general_setting_admin"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-gears",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"general settings",4)]),_:1},8,["href","active"])):c("",!0),e.$page.props.auth.user.admin?(n(),v(h,{key:5,href:e.route("Finance_admin"),active:e.route().current("Finance_admin"),class:"NavLink"},{default:a(()=>[s("i",{class:"fa-solid fa-money-bill-trend-up",style:i({left:e.sid_bar||e.test_side?"":"25px"})},null,4),s("p",{style:i({visibility:e.sid_bar||e.test_side?"":"hidden"})},"finance management",4)]),_:1},8,["href","active"])):c("",!0)])])]),s("div",{class:m([{block:f.value,hidden:!f.value},"sm:hidden"])},[s("div",qe,[t(E,{href:e.route("dashboard"),active:e.route().current("dashboard")},{default:a(()=>[C(" Dashboard ")]),_:1},8,["href","active"])]),s("div",Oe,[s("div",Re,[s("div",Ie,b(e.$page.props.auth.user.name),1),s("div",Te,b(e.$page.props.auth.user.email),1)]),s("div",Ae,[t(E,{href:e.route("profile.edit")},{default:a(()=>[C(" Profile ")]),_:1},8,["href"]),t(E,{href:e.route("logout"),method:"post",as:"button"},{default:a(()=>[C(" Log Out ")]),_:1},8,["href"])])])],2)],36),s("div",{class:"main_content",style:i({width:e.sid_bar||e.test_side?"":"calc(100% - 80px)"})},[e.$slots.header?(n(),_("header",Fe,[s("div",He,[s("i",{class:"fa-solid fa-bars",id:"sid_show1",onClick:l[7]||(l[7]=(...r)=>e.min_sid_bar&&e.min_sid_bar(...r)),style:i({transform:e.sid_bar||e.test_side?"":"rotateZ(90deg)"})},null,4),s("i",{class:"fa-solid fa-bars",id:"sid_show2",onClick:l[8]||(l[8]=(...r)=>e.min_sid_bar_second&&e.min_sid_bar_second(...r)),style:i({transform:e.sid_bar||e.test_side?"":"rotateZ(90deg)"})},null,4),y(e.$slots,"header")]),s("div",Ue,[t(h,{href:`/profile/${e.$page.props.auth.user.id}/${e.$page.props.auth.user.darkMode}/darcktheme`},{default:a(()=>[s("label",Qe,[w(s("input",{type:"checkbox",class:"theme-switch__checkbox","onUpdate:modelValue":l[9]||(l[9]=r=>e.darckMode=r)},null,512),[[z,e.darckMode]]),Ge])]),_:1},8,["href"]),s("div",Je,[t(R,{align:"right",width:"48"},{trigger:a(()=>[s("span",Ke,[s("button",We,[s("img",{class:"user_logo",src:"/"+e.$page.props.auth.user.avatar},null,8,Xe)])])]),content:a(()=>[t(S,{href:e.route("profile.edit")},{default:a(()=>[C(" Profile ")]),_:1},8,["href"]),t(S,{href:e.route("logout"),method:"post",as:"button"},{default:a(()=>[C("Log Out")]),_:1},8,["href"])]),_:1})])])])):c("",!0),s("main",null,[s("div",{class:"theme_edite_button",onClick:l[10]||(l[10]=(...r)=>e.openEdite&&e.openEdite(...r))},xe),e.openEdite_frame?(n(),_("div",es,[s("div",ss,[is,s("div",ts,[t(d(o),{class:"img_option",id:"sid_img_1",href:`/profile/${e.$page.props.auth.user.id}/${e.img1}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_2",href:`/profile/${e.$page.props.auth.user.id}/${e.img2}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_3",href:`/profile/${e.$page.props.auth.user.id}/${e.img3}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_4",href:`/profile/${e.$page.props.auth.user.id}/${e.img4}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_5",href:`/profile/${e.$page.props.auth.user.id}/${e.img5}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_6",href:`/profile/${e.$page.props.auth.user.id}/${e.img6}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_7",href:`/profile/${e.$page.props.auth.user.id}/${e.img7}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_8",href:`/profile/${e.$page.props.auth.user.id}/${e.img8}/sid_img`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"img_option",id:"sid_img_9",href:`/profile/${e.$page.props.auth.user.id}/${e.img9}/sid_img`,tabindex:"-1"},null,8,["href"])])]),s("div",ls,[as,s("div",rs,[t(d(o),{class:"filter_option",id:"sid_filter_1",href:`/profile/${e.$page.props.auth.user.id}/${e.color1}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_2",href:`/profile/${e.$page.props.auth.user.id}/${e.color2}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_3",href:`/profile/${e.$page.props.auth.user.id}/${e.color3}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_4",href:`/profile/${e.$page.props.auth.user.id}/${e.color4}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_5",href:`/profile/${e.$page.props.auth.user.id}/${e.color5}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_6",href:`/profile/${e.$page.props.auth.user.id}/${e.color6}/theme`,tabindex:"-1"},null,8,["href"]),t(d(o),{class:"filter_option",id:"sid_filter_7",href:`/profile/${e.$page.props.auth.user.id}/${e.color7}/theme`,tabindex:"-1"},null,8,["href"])])])])):c("",!0),e.openCategorie_frame?(n(),_("div",os,[s("div",ds,[s("div",ns,[us,s("div",{class:"exite",id:"exit_popup",onClick:l[11]||(l[11]=r=>e.openCategorie())},hs)]),s("div",ps,[s("form",{onSubmit:l[13]||(l[13]=V((...r)=>e.save_Categorie&&e.save_Categorie(...r),["prevent"])),class:"form1"},[s("div",_s,[w(s("input",{type:"text",id:"name",placeholder:"Name Of Categorie","onUpdate:modelValue":l[12]||(l[12]=r=>e.Categorie_form.name=r),error:e.Categorie_form.errors.name,required:""},null,8,cs),[[q,e.Categorie_form.name]])]),s("div",ms,[s("button",{type:"submit",class:m(["tiket_save",{"opacity-25":e.Categorie_form.processing}]),disabled:e.Categorie_form.processing}," save ",10,gs)])],32)])])])):c("",!0),t(j),y(e.$slots,"default")])],4)])]))}});export{ks as _};