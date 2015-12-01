__author__ = 'abkhanna'

import web

urls = (
    '/', 'Index',
)

render = web.template.render('templates')

class Index:
    def GET(self):
        # showcase the index page.
        return render.home()

if __name__ == "__main__":
    app = web.application(urls, globals())
    app.run()