import{r as l,a as r,j as e,b as v}from"./app-2d01f232.js";import b from"./top-options-19605be4.js";import{A as g}from"./admin-1fc15e48.js";import{B as T}from"./button-b1936e8c.js";import{I as s}from"./input-0dbd4292.js";import{T as N}from"./textarea-e0e5b01d.js";import{a as x,m as c}from"./functions-d556270f.js";import"./select-9b1f74ae.js";import"./react-select.esm-ac3b7f90.js";function _(){const[p,o]=l.useState(!1),[i,m]=l.useState(),[d,u]=l.useState(),h=n=>{n.preventDefault(),o(!0),u(void 0),m(void 0);let f=new FormData(n.target);v.post(x("dev-tools/themes"),f).then(t=>{let a=c(t);o(!1),m(a),u(t.data.data.output),(a==null?void 0:a.status)===!0&&n.target.reset()}).catch(t=>{o(!1),m(c(t))})};return r(g,{children:[e(b,{moduleType:"themes"}),e("div",{className:"row",children:r("div",{className:"col-md-12",children:[i&&e("div",{className:`alert alert-${i.status?"success":"danger"} jw-message`,children:i.message}),d&&e("pre",{children:d}),r("form",{method:"POST",onSubmit:h,children:[e(s,{name:"name",label:"Name",required:!0,description:"Theme name must be unique, only characters a-z 0-9 and -."}),e(s,{name:"title",label:"Title",required:!0,description:"Title display for the theme."}),e(N,{name:"description",label:"Description",rows:3,description:"Some description for your theme."}),r("div",{className:"row",children:[e("div",{className:"col-md-3",children:e(s,{name:"author",label:"Author",required:!0})}),e("div",{className:"col-md-3",children:e(s,{name:"version",label:"Version",required:!0,value:"1.0"})})]}),e(T,{label:"Create Theme",type:"submit",class:"mt-3",loading:p})]})]})})]})}export{_ as default};
