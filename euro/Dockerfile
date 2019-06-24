FROM python:3-onbuild  

COPY . /usr/src/app

COPY requirements.txt .
RUN pip install -r requirements.txt

CMD ["python", "flaskapi.py"]
