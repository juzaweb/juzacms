import{j as n,a as i,F as l}from"./app-2ae6152d.js";function e(a){return n("button",{type:a.type||"button",id:a.id,className:`btn btn-${a.color||"primary"} ${a.class||""}`,disabled:a.disabled||a.loading,onClick:a.onClick,children:a.loading?i(l,{children:[n("i",{className:"fa fa-spinner fa-spin"})," ",a.label]}):a.label})}export{e as B};
