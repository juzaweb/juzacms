import{r as n,a as t,j as e,b as g}from"./app-2ae6152d.js";import{b as v,m as p}from"./functions-7b46e371.js";import{I as i}from"./input-83ce994f.js";import{B as k}from"./button-a708f816.js";import{C as x}from"./checkbox-719092bc.js";import{A as M}from"./admin-b3e371f9.js";import N from"./top-options-f2ca7251.js";import"./select-a805bd53.js";import"./react-select.esm-96ac47f8.js";function O({plugin:d}){const[f,r]=n.useState(!1),[l,a]=n.useState(),[u,c]=n.useState(),b=m=>{m.preventDefault();let h=new FormData(m.target);return c(void 0),r(!0),g.post(v("dev-tools/plugins/"+d.name+"/crud"),h).then(s=>{let o=p(s);r(!1),a(o),c(s.data.data.output),(o==null?void 0:o.status)===!0&&m.target.reset(),setTimeout(()=>{a(void 0)},2e3)}).catch(s=>{a(p(s)),r(!1),setTimeout(()=>{a(void 0)},2e3)}),!1};return t(M,{children:[e(N,{moduleSelected:`plugins/${d.name}`,moduleType:"plugins",optionSelected:"crud"}),e("div",{className:"row",children:t("div",{className:"col-md-12",children:[e("h5",{children:"Make CRUD"}),l&&e("div",{className:`alert alert-${l.status?"success":"danger"} jw-message`,children:l.message}),u&&e("pre",{className:"jw-pre",children:u}),e("form",{method:"POST",onSubmit:b,children:t("div",{className:"row",children:[t("div",{className:"col-md-9",children:[e(i,{name:"table",label:"Table",required:!0}),e(i,{name:"label",label:"Label"}),e(k,{label:"Make CRUD",type:"submit",loading:f})]}),t("div",{className:"col-md-3",children:[e(x,{name:"make_menu",label:"Make Menu",checked:!0}),e(i,{name:"menu_position",label:"Menu Position",type:"number",value:"20"})]})]})})]})})]})}export{O as default};
