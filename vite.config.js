import {defineConfig} from "vite";

export default defineConfig({
   root: 'public',
   build: {
       outDir: 'build',
       emptyOutDir: true,
       manifest:true,
       rollupOptions: {
           input: {
               main: '../resource/js/app.js',
               styles: '../resource/css/app.css'
           }
       }
   }
});