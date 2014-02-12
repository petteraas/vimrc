augroup Programming
autocmd!
autocmd BufWritePost *.js !jshint <afile>
au BufRead,BufNewFile *.js set ft=javascript.jquery
autocmd FileType javascript set omnifunc=javascriptcomplete#CompleteJS
augroup en

