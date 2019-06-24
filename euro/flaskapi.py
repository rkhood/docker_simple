from flask import Flask
from flask_restful import Resource, Api


class Eurovision(Resource):

    def get(self):
        return {'songs':[
                         'Netherlands: 492',
                         'Italy: 465',
                         'Russia: 369',
                         'Switzerland: 360',
                         'Norway: 338',
                         ]
               }


if __name__ == '__main__':

    app = Flask(__name__)
    api = Api(app)
    api.add_resource(Eurovision, '/')
    app.run(host='0.0.0.0', port=80, debug=True)

