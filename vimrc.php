if has('autocmd')
  autocmd FileType html,xml set listchars-=tab:>.
  autocmd FileType php set expandtab tabstop=8 shiftwidth=4 encoding=utf-8 scrolloff=3
endif

augroup filetypedetect
    au! BufRead,BufNewFile *inc setfiletype php
augroup END

augroup Programming
autocmd!
autocmd BufWritePost *.php !php -d display_errors=on -l <afile>
autocmd BufWritePost *.inc !php -d display_errors=on -l <afile>
augroup en

let php_sql_query=1

let g:phpqa_messdetector_ruleset = "/usr/share/php/data/php_pmd/resources/rulesets"
let g:phpqa_codesniffer_args = "--standard=PSR2"
