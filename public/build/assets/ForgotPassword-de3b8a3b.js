import{p as d,o as r,i as _,w as o,a as t,u as e,Z as f,b as a,c as p,y as w,k as b,t as g,d as m,x as y,n as h}from"./app-b6b89d07.js";import{_ as k}from"./GuestLayout-10a4939b.js";import{_ as x,a as v,b as V}from"./TextInput-6099b84c.js";import{P as B}from"./PrimaryButton-c114756c.js";import"./_plugin-vue_export-helper-c27b6911.js";const N={class:"form_email_verify form_login"},P=a("div",{class:"mb-4 text-sm text-white forget_paragraph"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),S={key:0,class:"mb-4 font-medium text-sm text-green-600"},$=["onSubmit"],C={class:"inputs"},E={class:"buttons flex items-center justify-end w-100 mt-4 bottem_butt"},D={__name:"ForgotPassword",props:{status:{type:String}},setup(l){const s=d({email:""}),n=()=>{s.post(route("password.email"))};return(u,i)=>(r(),_(k,null,{default:o(()=>[t(e(f),{title:"Forgot Password"}),a("div",N,[P,l.status?(r(),p("div",S,w(l.status),1)):b("",!0),a("form",{onSubmit:g(n,["prevent"]),class:"form_forget"},[a("div",C,[t(x,{for:"email",value:"Email"}),t(v,{id:"email",type:"email",class:"mt-1 block w-full input",modelValue:e(s).email,"onUpdate:modelValue":i[0]||(i[0]=c=>e(s).email=c),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),t(V,{class:"mt-2",message:e(s).errors.email},null,8,["message"])]),a("div",E,[t(e(y),{href:u.route("login"),class:"back text-yellow-500"},{default:o(()=>[m(" back ")]),_:1},8,["href"]),t(B,{class:h(["ml-4 resend_button",{"opacity-25":e(s).processing}]),disabled:e(s).processing},{default:o(()=>[m(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,$)])]),_:1}))}};export{D as default};
