Import-Module oh-my-posh
oh-my-posh prompt init pwsh --config "F:\My Drive\Config\oh-my-posh.7.59.4.json" | Invoke-Expression

New-Alias -Name l -Value ls

function alias_touch { New-Item $args }
New-Alias -Name touch -Value alias_touch
