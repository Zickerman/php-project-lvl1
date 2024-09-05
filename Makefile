install: prepare
	composer install
# проверяем не добавлена ли папка vendor если нет, то добавляем
	grep -q '/vendor/' .gitignore || echo "/vendor/" >> .gitignore


prepare:
# делаем файл исполняемым
	chmod 755 ./bin/brain-games


brain-games:
	./bin/brain-games


validate:
	composer validate