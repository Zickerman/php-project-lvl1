install: prepare
	composer install
# проверяем не добавлена ли папка vendor если нет, то добавляем
	grep -q '/vendor/' .gitignore || echo "/vendor/" >> .gitignore
prepare:
# делаем файлы в каталоге bin исполняемыми
	chmod 755 ./bin/*


# приветствие
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


# запуск игры "Проверка на чётность"
brain-even:
	./bin/brain-even
# запуск игры "Калькулятор"
brain-calc:
	./bin/brain-calc
# запуск игры "НОД (Наибольший общий делитель)"
brain-gcd:
	./bin/brain-gcd
# запуск игры "Арифметическая прогрессия"
brain-progression:
	./bin/brain-progression