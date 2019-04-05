"""
    __author__ = Yudie Zhang
    student number = 44048417
    __email__ = yudie.zhang@uq.net.au
    
    This is for academic use.
    
"""

import requests
from bs4 import BeautifulSoup
import re
import csv

pages = []

# List all six result pages' url.
for i in range(6):
    if i == 0:
        url = "https://www.tripadvisor.com.au/Hotels-g255068-Brisbane_Brisbane_Region_Queensland-Hotels.html"
        pages.append(url)
    else:
        url = "https://www.tripadvisor.com.au/Hotels-g255068-c1-oa"+ str(i*30) + "-Brisbane_Brisbane_Region_Queensland-Hotels.html"
        pages.append(url)

# Create five csv files.
f_hci = open('hotel_cover_image.csv', 'w',newline='')
w_hci = csv.writer(f_hci)
w_hci.writerow(['Hotel ID','Cover Image Link'])

f_info = open('hotel_info.csv', 'w',newline='')
w_info = csv.writer(f_info)
w_info.writerow(['Hotel ID','Hotel Name','Location','Contact Number','Price','Rating'])

f_hi = open('hotel_image.csv', 'w',newline='')
w_hi = csv.writer(f_hi)
w_hi.writerow(['Hotel ID','Image Link'])

f_hf = open('hotel_facilities.csv', 'w',newline='')
w_hf = csv.writer(f_hf)
w_hf.writerow(['Hotel ID','Facilities'])

f_hr = open('hotel_review.csv', 'w',newline='')
w_hr = csv.writer(f_hr)
w_hr.writerow(['Hotel ID','Username','User Location','Review Content'])

i = 0
n = 0
for item in pages:
    page = requests.get(item)
    soup = BeautifulSoup(page.content,"html.parser")
    soup.prettify()

    # Get hotel's cover image in result pages.
    # Fill in the hotel_cover_image.csv file.
    result_div = soup.find(class_ = 'ppr_rup ppr_priv_hsx_hotel_list_lite')
    cover_img = result_div.find_all(class_ = 'inner')
    for each in cover_img:
        if each.has_attr('style'):
            if ("photo-s" in each.attrs['style']) or ("photo-o" in each.attrs['style']):
                n += 1
                hotel_cover_img = each.attrs['style'][21:-2]
                w_hci.writerow([n, hotel_cover_img])
        if each.has_attr('data-lazyurl'):
            if ("photo-s" in each.attrs['data-lazyurl']) or ("photo-o" in each.attrs['data-lazyurl']) or ("no_thumb_styleguide_icon" in each.attrs['data-lazyurl']):
                n += 1
                hotel_cover_img = each.attrs['data-lazyurl']
                w_hci.writerow([n, hotel_cover_img])
            
    # Get all hotel links in result pages.
    hotel_list = result_div.find_all(class_ = 'property_title prominent')
    url_list = []
    for item in hotel_list:
        if item.has_attr('href'):
            hotel_url = item.attrs['href']
            # add the missing part to let hotel_url be in right format, remove '/n'
            hotel_url = "https://www.tripadvisor.com.au" + re.sub('[\r\n\t]','',hotel_url)
            url_list.append(hotel_url)

    for each_url in url_list:
        hotel_page = requests.get(each_url)
        soup_hotel = BeautifulSoup(hotel_page.content,"html.parser")
        soup_hotel.prettify()
        userNum=0
        
        # Fill in the hotel_info.csv file.
        i += 1
        hotel_name = soup_hotel.find(class_ = "ui_header h1")
        hotel_name = hotel_name.contents[0]
        
        hotel_location = ""
        class_name = ['street-address','locality','country-name']
        for each in class_name:
            location = soup_hotel.find(class_ = each)
            location = location.contents[0]
            hotel_location += location
        
        contactNum = soup_hotel.find(class_ = 'is-hidden-mobile detail')
        if contactNum != None:
            contactNum = contactNum.contents[0]
            
        price = soup_hotel.find_all(class_ = 'price')
        for each in price:
            if str(each).startswith("<div"):
                hotel_price = each.contents[0]
        if not str(hotel_price).startswith("AU"):
            hotel_price = 'AU' + str(hotel_price)
        if not str(hotel_price).endswith("*"):
            hotel_price = str(hotel_price) + '*'
            
        hotel_rating = soup_hotel.find(class_ = 'overallRating')
        hotel_rating = hotel_rating.contents[0]
        w_info.writerow([i,hotel_name,hotel_location,contactNum,hotel_price,hotel_rating])

        # Fill in the hotel_image.csv file.
        hotel_images = soup_hotel.find_all(class_ = 'centeredImg')
        for img in hotel_images:
            if img.has_attr('data-lazyurl'):
                hotel_images_item = img.attrs['data-lazyurl']
                w_hi.writerow([i, hotel_images_item])

        # Fill in the hotel_facilities.csv file.
        hotel_facilities = soup_hotel.find_all(class_ = 'highlightedAmenity detailListItem')
        for div in hotel_facilities:
            facilities = div.contents[0]
            w_hf.writerow([i, facilities])

        # Fill in the hotel_review.csv file.
        info_text = soup_hotel.find_all(class_ = "info_text")
        for div in info_text:
            username = div.contents[0].contents[0]
            name = str(username).encode('utf-8','ignore')
            userNum += 1
            reviewNum=1
            
            location = div.find_all(class_ = "userLoc")
            for loc in location:
                user_location = loc.contents[0].contents[0]
                location = str(user_location).encode('utf-8','ignore')
                
            review = soup_hotel.find_all(class_ = "partial_entry")
            for div in review:
                # Collect reviewer's corresponding review.
                if userNum==reviewNum:
                    hotel_review = div.contents[0]
                    reviews = str(hotel_review).encode('utf-8','ignore')

                    w_hr.writerow([i,name, location,reviews])
                    
                reviewNum += 1

# Close the csv files.
f_hci.close()
f_info.close()
f_hi.close()
f_hf.close()
f_hr.close()

                    


