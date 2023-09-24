import React from "react";
import ReactDOM from 'react-dom/client'; 

export const Thehealthyhub = () => {
  return (
      <div className="label">
        <div className="text-wrapper">The Healthy Hub</div>
      </div>
  );
}

export default Thehealthyhub;

if (document.getElementById('thh')) {
  const Index = ReactDOM.createRoot(document.getElementById("thh"));

  Index.render(
      <React.StrictMode>
          <Thehealthyhub/>
      </React.StrictMode>
  )
}



// if(document.getElementById('thh')){
//   ReactDOM.render(<logoName />, document.getElementById('thh'));
// }

// function Example() {
//   return (
//       <div className="container">
//           <div className="row justify-content-center">
//               <div className="col-md-8">
//                   <div className="card">
//                       <div className="card-header">Example Component</div>

//                       <div className="card-body">I'm an example component!</div>
//                   </div>
//               </div>
//           </div>
//       </div>
//   );
// }

