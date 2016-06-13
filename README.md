testpro
=======

RUN:
----
php app/console server:run

USAGE:
------
127.0.0.1:8000			-- shows default Symfony "hello, world" page

127.0.0.1:8000/news		-- shows news list

    ?sortby=caption

	=date

    ?page=0, 1, ...

    ?count=1, 2, ...

127.0.0.1/news/show/{id}	-- shows full news page with id == {id} ;-)