__author__ = 'abkhanna'

import web
from pymongo import MongoClient


urls = (
    '/', 'Drivers',
    '/drivers', 'Drivers',
)

render = web.template.render('templates')

def database():
    client = MongoClient("mongodb://admin:admin@ds027155.mongolab.com:27155/heroku_sqqktg3l")
    db = client.heroku_sqqktg3l
    return db

class Index:
    def GET(self):
        # showcase the index page.
        return render.home()

class Drivers:
    def GET(self):
        return render.drivers()

    def POST(self):
        request_data = web.input(first='', last='', email='', phone='', city='', miles='')
        first = request_data.first
        last = request_data.last
        email = request_data.email
        phone = request_data.phone
        city = request_data.city
        miles = request_data.miles
        database().DriverRecord.insert_one({
            "first_name": first,
            "last_name": last,
            "email": email,
            "phone": phone,
            "city": city,
            "miles": miles
        })
        return render.drivers()

if __name__ == "__main__":
    app = web.application(urls, globals())
    app.run()