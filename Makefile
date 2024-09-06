install: prepare
	composer install
# проверяем не добавлена ли папка vendor если нет, то добавляем
	grep -q '/vendor/' .gitignore || echo "/vendor/" >> .gitignore
prepare:
# делаем файл исполняемым
	chmod 755 ./bin/brain-games


# запуск игры
brain-games:
	./bin/brain-games


# проверяем файл composer.json на корректность
validate:
	composer validate


# проверяем и причесываем код с помощью codesniffer
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin