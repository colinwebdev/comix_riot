let title = document.querySelector('#title')
let showTitle = document.querySelector('#showTitle')
let caption = document.querySelector('#caption')
let showCaption = document.querySelector('#showCaption')
let transcript = document.querySelector('#transcript')
let showTranscript = document.querySelector('#showTranscript')
let blogTitle = document.querySelector('#blogTitle')
let showBlogTitle = document.querySelector('#showBlogTitle')
let blog = document.querySelector('#blog')
let showBlog = document.querySelector('#showBlog')

title.addEventListener('keyup', (event)=>{
    showTitle.innerHTML = title.value
})

caption.addEventListener('keyup', (event)=>{
    showCaption.innerHTML = caption.value
})

transcript.addEventListener('keyup', (event)=>{
    showTranscript.innerHTML = transcript.value
})

blogTitle.addEventListener('keyup', (event)=>{
    showBlogTitle.innerHTML = blogTitle.value
})

blog.addEventListener('keyup', (event)=>{
    showBlog.innerHTML = blog.value
})