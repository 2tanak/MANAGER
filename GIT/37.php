$ git branch -d hotfix
нельзя удалить ветку если мы на ней находимся
ЕСЛИ В ВЕТКЕ ЕСТЬ ИЗМЕНЕНИЕ ТО УДАЛЯТСЯ НЕ БУДЕТ ПОЭТОМУ
$ git branch -D hotfix



Чтобы удалить ветку в локальной рабочей копии:
$ git branch -d branch-name

Чтобы удалить ветку в удаленном репозитории:
$ git push origin --delete branch-name
